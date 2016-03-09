<?php
class Controller_Mensagens extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('vendor/bootstrap.min.css', 'vendor/ionicons.min.css', 'vendor/font.awesome.min.css', 'vendor/iCheck/blue.css', 'skins/skin-blue.min.css', 'AdminLTE.min.css','main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'app.min.js', 'vendor/iCheck/icheck.min.js', 'vendor/slimScroll/jquery.slimscroll.min.js', 'vendor/fastclick/fastclick.min.js', 'main.js'),
    );

    public function action_index(){
        $messages = ORM::factory('Message')->order_by('id','desc')->find_all();
        $this->template->content->messages = $messages;
    }

    public function action_view(){
        $message = ORM::factory('Message')->where('id', '=', $this->request->param('id'))->find();
        $this->template->content->message = $message;
    }

    public function action_delete(){
        $id = $this->request->param('id');
        $message = ORM::factory('Message', $id);
        $message->delete();

        $_POST = array();
        Controller::redirect("/mensagens/?sucesso=Deletado com sucesso");
    }

}
?>