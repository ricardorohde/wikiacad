<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Root extends Kohana_ControllerRoot {
    public $params = array(
        'css_external'  => array(),
        'css'           => array('reset.css', 'bootstrap.min.css', 'main.less'),
        'js_external'   => array(),
        'js'            => array('bootstrap.min.js', 'meiomask.min.js', 'bootbox.js', 'main.js'),
    );

    public $template            = 'shared/template/base';
    public $auth_required       = TRUE;

    public function before(){
        $this->session = Session::instance();
        // $this->uri = strtolower(Request::current()->controller().'/'.Request::current()->action());
        // View::bind_global('uri', $this->uri);

        if ($this->auth_required == TRUE){
            if (Auth::instance()->logged_in() == TRUE){
                $user = Auth::instance()->get_user();
                if (!$user->has('roles', 2)) {
                    Controller::redirect('/');
                }
            }else{
                Controller::redirect('/');
            }
        }

        parent::before();
    }

    // public function is_permitted(){
    //     $this->user_config = Kohana::$config->load('cms.user');

    //     $user = $this->user = Auth::instance()->get_user();
    //     $role = $user->roles->where('name', '<>', 'login')->find();

    //     $this->user_config = $this->user_config[$role->name];
    //     $this->is_adm = $role->name == 'admin' ? TRUE : FALSE;
    //     $this->menu_default = $this->user_config['menu_default'];

    //     foreach($this->user_config['menu'] as $href => $params){
    //         if($this->uri == trim($href, '/')){
    //             return TRUE;
    //         }
    //         foreach($params['submenu'] as $_href => $_params){
    //             if($this->uri == trim($_href, '/')){
    //                 return TRUE;
    //             }
    //         }
    //         foreach($params['permitted'] as $_href){
    //             if($this->uri == trim($_href, '/')){
    //                 return TRUE;
    //             }
    //         }
    //     }

    //     Controller::redirect($this->menu_default);
    // }
}

