<?php
class Controller_Default extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('vendor/bootstrap.min.css', 'vendor/ionicons.min.css', 'vendor/font.awesome.min.css', 'skins/skin-yellow-light.min.css', 'AdminLTE.min.css', 'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', 'main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'vendor/custom-file-input.js', 'app.min.js', 'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'vendor/slimScroll/jquery.slimscroll.min.js', 'vendor/fastclick/fastclick.min.js', 'main.js'),
    );

    public $auth_required = TRUE;

    public function action_index(){

    }

    public function action_logout()
    {
        Auth::instance()->logout();
        $this->user = NULL;
        Session::instance()->destroy();
        Controller::redirect('../');
    }

}
?>