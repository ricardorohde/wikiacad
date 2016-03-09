<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Root extends Kohana_ControllerRoot {
    public $params = array(
        'css_external' => array(),
        'css'          => array('reset.css', 'bootstrap.min.css', 'main.less'),
        'js_external'  => array(),
        'js'           => array('bootstrap.min.js', 'meiomask.min.js', 'bootbox.js', 'main.js'),
    );

    public $template      = 'shared/template/base';
    public $auth_required = TRUE;

    public function before(){
        parent::before();

        $this->session = Session::instance();

        if ($this->auth_required == TRUE){
            if (Auth::instance()->logged_in() == TRUE){
                $user = Auth::instance()->get_user();

                if (!$user->has('roles', 3)) {
                    Controller::redirect('../');
                }else{
                    $this->template->header->user = $user;
                }
            }else{
                Auth::instance()->logout();
                $this->user = NULL;
                Session::instance()->destroy();
                Controller::redirect('../');
            }
        }

    }

}

