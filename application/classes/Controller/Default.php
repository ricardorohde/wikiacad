<?php
class Controller_Default extends Controller_Root {
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

    public function action_index(){}
}
?>