<?php
class Controller_Cadastro extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external'  => array(),
        'css' => array(
            'vendor/bootstrap/dist/css/bootstrap.css' ,
            'vendor/bootstrapValidator.css',
            'main.less'
        ),
        'js_external'   => array(),
        'js'            => array(
            'vendor/jquery/dist/jquery.min.js',
            'vendor/bootstrap/dist/js/bootstrap.min.js',
            'vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js',
            'vendor/bootstrapvalidator/src/js/language/pt_BR.js',
            'main.js'
        ),
    );

    public function action_index(){
    }

    public function action_fresh(){
        if (HTTP_Request::POST == $this->request->method()){
            try {
                $nome        = $_POST['nome'];
                $ra          = $_POST['ra'];
                $email       = $_POST['email'];
                $password    = $_POST['password'];

                $user = ORM::factory('User')->where('email', '=', $email)->find();

                if ($user->loaded()){
                    Controller::redirect('/?erro=Erro no cadastro, o e-mail inserido já existe na Wiki ACAD.');
                }

                $user = ORM::factory('User');
                $user->email    = $email;
                $user->username = $email;
                $user->password = $password;
                $user->save();

                $user->add('roles', array(ORM::factory('Role', array('name' => 'login')), ORM::factory('Role', array('name' => 'student'))));

                $student = ORM::factory('Student');
                $student->user_id = $user->id;
                $student->nome    = $nome;
                $student->ra      = $ra;
                $student->save();

                $_POST = array();

                $assunto = 'Cadastro Concluído | Wiki ACAD';

                $p = "<p style=\"color:#333; font-family:arial,verdana;\">";
                $body = '';
                $body .= "<h2 style=\"color:#333; font-family:arial,verdana;\">".$assunto."</h2>";
                $body .= $p ."Olá ".$nome.",</p>";
                $body .= $p ."Seu cadastro no Wiki ACAD foi concluído com sucesso!";
                $body .= $p ."<strong>Email:</strong> ".$email;
                $body .= $p ."<strong>Senha:</strong> ".$password;

                if (Mailer::send( 'rodrigoeddie@gmail.com', $nome, $assunto, $body, $email )) {
                    Controller::redirect("/default/?sucesso=O usuário '{$student->nome}' foi criado com sucesso");
                } else {
                    Controller::redirect("/default/?sucesso=O usuário '{$student->nome}' foi criado com sucesso");
                }


            } catch (ORM_Validation_Exception $e) {
                Controller::redirect('/default/create/?erro=erro no cadastro<br>'.$e->errors('models'));
            }
        }else{
            $this->response->body(View::factory('pages/default/'));
        }
    }

    public function action_news(){
        if (HTTP_Request::POST == $this->request->method()){
            try {
                $email = $_POST['email'];

                $corretor = ORM::factory('newsletter');
                $corretor->email = $email;
                $corretor->save();

                $_POST = array();

                Controller::redirect("/default/?sucesso=Obrigado, e-mail cadastrado com sucesso");

            } catch (ORM_Validation_Exception $e) {
                Controller::redirect('/default/create/?erro=erro no cadastro<br>'.$e->errors('models'));
            }
        }
        else{
            $this->response->body(View::factory('pages/default/'));
        }
    }

}
?>