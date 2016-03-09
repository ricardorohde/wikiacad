<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Root extends Kohana_ControllerRoot {

    public $params = array(
        'css_external'  => array(),
        'css'           => array(),
        'js_external'   => array(),
        'js'            => array(),
    );

    public $template      = 'shared/template/base';
    public $auth_required = TRUE;

    public function before(){
        parent::before();

        if (Auth::instance()->logged_in() == TRUE){
            $user = Auth::instance()->get_user();

            if ($user->has('roles', 3)) {
                Controller::redirect('/dashboard/default/');
            }
        }

    }
}

