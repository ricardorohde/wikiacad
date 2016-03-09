<?php
class Controller_Upload extends Controller_Root {
    public $auto_render = false; // Auto instantiates and renders views
    public $params = array(
        'css_external'  => array(),
        'css'       => array('bootstrap.min.less', 'main.less'),
        'js_external'   => array(),
        'js'        => array('plugins.js', 'bootstrap.js', 'vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js' , 'vendor/bootstrapvalidator/src/js/language/pt_BR.js', 'main.js','uploadImages.js'),
    );

    public $auth_required       = FALSE;

    public function action_index(){
        require('vendor/UploadHandler.php');
        $upload_handler = new UploadHandler();
    }


}
?>