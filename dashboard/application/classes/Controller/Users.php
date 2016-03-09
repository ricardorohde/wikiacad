<?php
class Controller_Users extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('vendor/bootstrap.min.css', 'vendor/ionicons.min.css', 'vendor/font.awesome.min.css', 'vendor/iCheck/blue.css', 'skins/skin-yellow-light.min.css', 'AdminLTE.min.css','main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'app.min.js', 'vendor/iCheck/icheck.min.js', 'vendor/slimScroll/jquery.slimscroll.min.js', 'vendor/fastclick/fastclick.min.js', 'main.js'),
    );

    public $auth_required       = TRUE;

    public function action_index(){
        $user = Auth::instance()->get_user();

        // $users = ORM::factory('Role', array('name' => 'admin'))->users->find_all();
        // $this->template->content->users = $users;
        $user = ORM::factory('User')->where('id', '=', $user->id)->find();
        $this->template->content->user = $user;
    }

    public function action_edit(){
        $user = ORM::factory('User')->where('id', '=', $this->request->param('id'))->find();
        $this->template->content->user = $user;
    }

    public function action_change(){
        if (HTTP_Request::POST == $this->request->method())
        {
            $id       = $_POST['id'];
            $email    = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = ORM::factory('User', $id);
            $user->email   = $email;
            $user->username = $username;
            if (!empty($password)) {
                $user->password = $password;
            }
            $user->save();

            $_POST = array();
            Controller::redirect("users/?sucesso=Editado com sucesso");
        }
    }

    public function action_delete(){
        $id = $this->request->param('id');
        $user = ORM::factory('User', $id);
        $user->delete();

        $_POST = array();
        Controller::redirect("/users/?sucesso=Deletado com sucesso");
    }

    public function action_create(){
        if (HTTP_Request::POST == $this->request->method())
        {
            try {
                $user = ORM::factory('User');
                $user->email    = $_POST['email'];
                $user->username = $_POST['username'];
                $user->password = $_POST['password'];
                $user->save();

                $user->add('roles', array(ORM::factory('Role', array('name' => 'login')),ORM::factory('Role', array('name' => 'admin'))));

                $_POST = array();

                Controller::redirect("/users/?sucesso=O usuário '{$user->username}' foi criado com sucesso");

            } catch (ORM_Validation_Exception $e) {
                Controller::redirect('/users/create/?erro=erro no cadastro<br>'.$e->errors('models'));
            }
        }
    }
}
?>