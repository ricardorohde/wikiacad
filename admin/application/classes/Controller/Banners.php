<?php
class Controller_Banners extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('vendor/bootstrap.min.css', 'vendor/ionicons.min.css', 'vendor/font.awesome.min.css', 'vendor/iCheck/blue.css', 'skins/skin-blue.min.css', 'AdminLTE.min.css','main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'app.min.js', 'vendor/iCheck/icheck.min.js', 'vendor/slimScroll/jquery.slimscroll.min.js', 'vendor/fastclick/fastclick.min.js', 'vendor/datatables/jquery.dataTables.min.js', 'vendor/datatables/dataTables.bootstrap.min.js', 'table.js', 'main.js'),
    );

    public $auth_required       = TRUE;

    public function action_index(){
        $banners = ORM::factory('banner')->find_all();
        $this->template->content->banners = $banners;
    }

    public function action_edit(){
        $banner = ORM::factory('banner')->where('id', '=', $this->request->param('id'))->find();
        $this->template->content->banner = $banner;
    }

    public function action_change(){
        if (HTTP_Request::POST == $this->request->method())
        {
            $id        = $_POST['id'];
            $destaque1 = $_POST['destaque1'];
            $destaque2 = $_POST['destaque2'];
            if (!empty($_FILES['imagem']['name'])) {
                $imagem = $this->_save_image($_FILES['imagem']);
            }

            $banner = ORM::factory('banner', $id);
            $banner->destaque1 = $destaque1;
            $banner->destaque2 = $destaque2;
            if (isset($imagem)) {
                $banners->imagem = $imagem;
            }
            $banner->save();

            $_POST = array();
            Controller::redirect("banners/?sucesso=Editado com sucesso");
        }
    }

    public function action_delete(){
        $id      = $this->request->param('id');
        $banner = ORM::factory('banner', $id);
        $banner->delete();

        $_POST = array();
        Controller::redirect("banners/?sucesso=Deletado com sucesso");
    }

    public function action_create(){
        if (HTTP_Request::POST == $this->request->method()){
            $destaque1 = $_POST['destaque1'];
            $destaque2 = $_POST['destaque2'];
            $imagem    = $this->_save_image($_FILES['imagem']);

            $banner = ORM::factory('banner');
            $banner->destaque1 = $destaque1;
            $banner->destaque2 = $destaque2;
            $banner->imagem    = $imagem;
            $banner->save();

            $_POST = array();
            Controller::redirect("banners/?sucesso=Banner cadastrado com sucesso");
        }
    }

    protected function _save_image($image){
        $this->auto_render = FALSE;
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }

        $directory = '../uploads/';

        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';

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