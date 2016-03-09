<?php
class Controller_Login extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array(),
        'js_external'  => array(),
        'js'           => array(),
    );

    public function action_index(){
        if (HTTP_Request::POST == $this->request->method()){

            $username = $this->request->post('username');
            $password = $this->request->post('password');
            $remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;

            if (Auth::instance()->login($username, $password, $remember))
            {
                $this->user = Auth::instance()->get_user();

                if ($this->user->has('roles', 3)) {
                    Controller::redirect('dashboard/default/');
                }else{
                    Controller::redirect('login/logout');
                }
            }else{
                Controller::redirect('/default/?erro=login');
            }
        }
    }

    public function action_logout(){
        Auth::instance()->logout();
        $this->user = NULL;
        Session::instance()->destroy();
        Controller::redirect('/');
    }
}
?>