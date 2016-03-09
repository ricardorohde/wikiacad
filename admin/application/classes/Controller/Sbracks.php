<?php
class Controller_Sbracks extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('vendor/bootstrap.min.css', 'vendor/ionicons.min.css', 'vendor/font.awesome.min.css', 'skins/skin-blue.min.css', 'AdminLTE.min.css','vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css','main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'app.min.js', 'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'vendor/slimScroll/jquery.slimscroll.min.js', 'vendor/fastclick/fastclick.min.js', 'main.js'),
    );

    public $auth_required       = TRUE;

    public function action_index(){
        $sbracks = ORM::factory('Information')->find();
        $this->template->content->sbracks = $sbracks;
    }

    public function action_change(){
        if (HTTP_Request::POST == $this->request->method()){
            $id       = $_POST['id'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $resumo1  = $_POST['resumo1'];
            $resumo2  = $_POST['resumo2'];
            $resumo3  = $_POST['resumo3'];
            $resumo4  = $_POST['resumo4'];
            $info     = $_POST['info'];
            $visao    = $_POST['visao'];
            $valores  = $_POST['valores'];
            $missao   = $_POST['missao'];
            if (!empty($_FILES['icon_resumo1']['name'])) {
                $icon_resumo1 = $this->_save_image($_FILES['icon_resumo1']);
            }
            if (!empty($_FILES['icon_resumo2']['name'])) {
                $icon_resumo2 = $this->_save_image($_FILES['icon_resumo2']);
            }
            if (!empty($_FILES['icon_resumo3']['name'])) {
                $icon_resumo3 = $this->_save_image($_FILES['icon_resumo3']);
            }
            if (!empty($_FILES['icon_resumo4']['name'])) {
                $icon_resumo4 = $this->_save_image($_FILES['icon_resumo4']);
            }
            if (!empty($_FILES['logo']['name'])) {
                $logo = $this->_save_image($_FILES['logo']);
            }

            $sbracks = ORM::factory('Information', $id);
            $sbracks->endereco = $endereco;
            $sbracks->telefone = $telefone;
            $sbracks->resumo1  = $resumo1;
            $sbracks->resumo2  = $resumo2;
            $sbracks->resumo3  = $resumo3;
            $sbracks->resumo4  = $resumo4;
            $sbracks->info     = $info;
            $sbracks->visao    = $visao;
            $sbracks->valores  = $valores;
            $sbracks->missao   = $missao;
            if (isset($icon_resumo1)) {
                $sbracks->icon_resumo1 = $icon_resumo1;
            }
            if (isset($icon_resumo2)) {
                $sbracks->icon_resumo2 = $icon_resumo2;
            }
            if (isset($icon_resumo3)) {
                $sbracks->icon_resumo3 = $icon_resumo3;
            }
            if (isset($icon_resumo4)) {
                $sbracks->icon_resumo4 = $icon_resumo4;
            }
            if (isset($logo)) {
                $sbracks->logo = $logo;
            }
            $sbracks->save();

            $_POST = array();
            Controller::redirect("sbracks/?sucesso=Editado com sucesso");
        }
    }

    protected function _save_image($image){
        $this->auto_render = FALSE;

        $extensao = explode('image/', $image["type"]);

        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('png'))){

            return FALSE;
        }

        $directory = '../uploads/';

        if ($file = Upload::save($image, NULL, $directory)){
            $filename = strtolower(Text::random('alnum', 20)).'.'.$extensao[0];

            Image::factory($file)
                ->resize(400, 400, Image::AUTO)
                ->save($directory.$filename);

            // Delete the temporary file
            unlink($file);

            return $filename;
        }

        return FALSE;
    }
}
?>