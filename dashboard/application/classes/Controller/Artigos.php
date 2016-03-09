<?php
class Controller_Artigos extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external' => array(),
        'css'          => array('vendor/bootstrap.min.css', 'vendor/ionicons.min.css', 'vendor/font.awesome.min.css', 'skins/skin-yellow-light.min.css', 'AdminLTE.min.css', 'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', 'main.less'),
        'js_external'  => array(),
        'js'           => array('vendor/jQuery/jQuery-2.1.4.min.js', 'vendor/bootstrap.min.js', 'vendor/custom-file-input.js', 'app.min.js', 'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'vendor/slimScroll/jquery.slimscroll.min.js', 'vendor/fastclick/fastclick.min.js', 'main.js'),
    );

    public $auth_required       = TRUE;

    public function action_index(){
        $articles = ORM::factory('Article')->where('ativo', '=', 1)->find_all();
        $this->template->content->articles = $articles;
    }

    public function action_edit(){
        $article = ORM::factory('Article')->where('id', '=', $this->request->param('id'))->where('ativo', '=', 1)->find();
        $this->template->content->article = $article;
    }

    public function action_view(){
        $article = ORM::factory('Article')->where('id', '=', $this->request->param('id'))->where('ativo', '=', 1)->find();
        $this->template->content->article = $article;
    }

    public function action_pesquisa(){
        $q = $_GET['q'];

        $articles = ORM::factory('Article')
        ->where('ativo', '=', 1)
        ->search($q)
        ->find_all();

        $this->template->content->articles = $articles;
    }

    public function action_change(){
        if (HTTP_Request::POST == $this->request->method()){
            $id      = $_POST['id'];
            $title   = $_POST['title'];
            $content = $_POST['content'];

            $article = ORM::factory('Article', $id);
            $article->title   = $title;
            $article->content = $content;
            $article->save();

            $_POST = array();
            Controller::redirect("artigos/?sucesso=Editado com sucesso");
        }
    }

    public function action_delete(){
        $id = $this->request->param('id');
        $article = ORM::factory('Article', $id);
        $article->delete();

        $_POST = array();
        Controller::redirect("artigos/?sucesso=Deletado com sucesso");
    }

    public function action_criar(){
        if (HTTP_Request::POST == $this->request->method()){
            $title   = $_POST['title'];
            $content = $_POST['content'];

            $article = ORM::factory('Article');
            $article->user_id = Auth::instance()->get_user()->id;
            $article->title   = $_POST['title'];
            $article->content = $_POST['content'];
            $article->ativo   = 1;
            $article->save();

            $_POST = array();
            Controller::redirect("artigos/?sucesso=Notícia cadastrada com sucesso");
        }
    }
}
?>