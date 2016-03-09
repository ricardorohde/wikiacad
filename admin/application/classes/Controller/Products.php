<?php
class Controller_Products extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('vendor/bootstrap.min.css', 'vendor/ionicons.min.css', 'vendor/font.awesome.min.css', 'vendor/iCheck/blue.css', 'skins/skin-blue.min.css', 'AdminLTE.min.css','main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'app.min.js', 'vendor/iCheck/icheck.min.js', 'vendor/slimScroll/jquery.slimscroll.min.js', 'vendor/fastclick/fastclick.min.js', 'vendor/datatables/jquery.dataTables.min.js', 'vendor/datatables/dataTables.bootstrap.min.js', 'table.js', 'main.js'),
    );

    public $auth_required       = TRUE;

    public function action_index(){
        $products = ORM::factory('Product')->find_all();
        $this->template->content->products = $products;
    }

    public function action_edit(){
        $product = ORM::factory('Product')->where('id', '=', $this->request->param('id'))->find();
        $this->template->content->product = $product;
    }

    public function action_change(){
        if (HTTP_Request::POST == $this->request->method())
        {
            $id           = $_POST['id'];
            $produto      = $_POST['produto'];
            $dimensoes    = $_POST['dimensoes'];
            $capacidade   = $_POST['capacidade'];
            $movimentacao = $_POST['movimentacao'];
            $empilhamento = $_POST['empilhamento'];
            $tipo         = $_POST['tipo'];
            $preco        = $_POST['preco'];
            $descricao    = $_POST['descricao'];
            if (!empty($_FILES['imagem']['name'])) {
                $imagem = $this->_save_image($_FILES['imagem']);
            }

            $product = ORM::factory('Product', $id);
            $product->produto      = $produto;
            $product->dimensoes    = $dimensoes;
            $product->capacidade   = $capacidade;
            $product->movimentacao = $movimentacao;
            $product->empilhamento = $empilhamento;
            $product->tipo         = $tipo;
            $product->preco        = $preco;
            $product->descricao    = $descricao;
            if (isset($imagem)) {
                $product->imagem = $imagem;
            }
            $product->save();

            $_POST = array();
            Controller::redirect("products/?sucesso=Editado com sucesso");
        }
    }

    public function action_delete(){
        $id      = $this->request->param('id');
        $product = ORM::factory('Product', $id);
        $product->delete();

        $_POST = array();
        Controller::redirect("products/?sucesso=Deletado com sucesso");
    }

    public function action_create(){
        if (HTTP_Request::POST == $this->request->method()){
            $produto      = $_POST['produto'];
            $dimensoes    = $_POST['dimensoes'];
            $capacidade   = $_POST['capacidade'];
            $movimentacao = $_POST['movimentacao'];
            $empilhamento = $_POST['empilhamento'];
            $tipo         = $_POST['tipo'];
            $preco        = $_POST['preco'];
            $descricao    = $_POST['descricao'];
            $imagem       = $this->_save_image($_FILES['imagem']);

            $product = ORM::factory('Product');
            $product->produto      = $produto;
            $product->dimensoes    = $dimensoes;
            $product->capacidade   = $capacidade;
            $product->movimentacao = $movimentacao;
            $product->empilhamento = $empilhamento;
            $product->tipo         = $tipo;
            $product->preco        = $preco;
            $product->descricao    = $descricao;
            $product->imagem       = $imagem;
            $product->save();

            $_POST = array();
            Controller::redirect("products/?sucesso=Produto cadastrado com sucesso");
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