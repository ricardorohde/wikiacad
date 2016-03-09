<?php
class Controller_Clientes extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external'  => array(),
        'css'       => array('bootstrap.min.less', 'main.less'),
        'js_external'   => array(),
        'js'        => array('plugins.js', 'vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js' , 'vendor/bootstrapvalidator/src/js/language/pt_BR.js', 'bootstrap.js', 'main.js'),
    );

    public $auth_required       = TRUE;

    public function action_index() {
        // $users = ORM::factory('User')->find_all();
        $users = ORM::factory('Role', array('name' => 'customer'))->users->find_all();
        $this->template->content->users = $users;
    }

    public function action_edit() {
        $user = ORM::factory('User')->where('id', '=', $this->request->param('id'))->find();
        $this->template->content->user = $user;
    }

    public function action_change() {
        if (HTTP_Request::POST == $this->request->method()) {
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
            Controller::redirect("clientes/?sucesso=Editado com sucesso");
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');
        $user = ORM::factory('User', $id);
        $user->delete();

        $_POST = array();
        Controller::redirect("/clientes/?sucesso=Deletado com sucesso");
    }

    public function action_create() {
        if (HTTP_Request::POST == $this->request->method())
        {
            try {
                $user = ORM::factory('User');
                $user->email    = $_POST['email'];
                $user->username = $_POST['username'];
                $user->password = $_POST['password'];
                $user->save();

                $user->add('roles', array(ORM::factory('Role', array('name' => 'login')),ORM::factory('Role', array('name' => 'corretor'))));

                $_POST = array();

                Controller::redirect("/clientes/?sucesso=O usuário '{$user->username}' foi criado com sucesso");

            } catch (ORM_Validation_Exception $e) {
                Controller::redirect('/clientes/create/?erro=erro no cadastro<br>'.$e->errors('models'));
            }
        }
    }
}
?>