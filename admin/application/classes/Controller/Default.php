<?php
class Controller_Default extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('AdminLTE.min.css', 'vendor/iCheck/blue.css', 'vendor/bootstrap.min.css', 'main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'vendor/iCheck/icheck.min.js', 'main.js'),
    );

    public $auth_required       = FALSE;

    public function action_index(){
        if (Auth::instance()->logged_in() == TRUE){
            $user = Auth::instance()->get_user();
            if ($user->has('roles', 2)) {
                Controller::redirect('/dashboard');
            }
        }

        if (HTTP_Request::POST == $this->request->method())
        {
            $username = $this->request->post('username');
            $password = $this->request->post('password');
            $remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
            if (Auth::instance()->login($username, $password, $remember))
            {
                $this->user = Auth::instance()->get_user();
                if ($this->user->has('roles', 2)) {
                    Controller::redirect('dashboard/');
                }else{
                    Controller::redirect('default/logout');
                }
            }
            else
            {
                Controller::redirect('/default/?erro=login');
            }
        }
    }

    public function action_logout()
    {
        Auth::instance()->logout();
        $this->user = NULL;
        Session::instance()->destroy();
        Controller::redirect('/');
    }

}
?>