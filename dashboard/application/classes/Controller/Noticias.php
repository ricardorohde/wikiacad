<?php
class Controller_Noticias extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external'  => array(),
        'css'       => array('bootstrap.min.less', 'main.less'),
        'js_external'   => array(),
        'js'        => array('plugins.js', 'bootstrap.js', 'vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js' , 'vendor/bootstrapvalidator/src/js/language/pt_BR.js', 'main.js'),
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

    public function action_change(){
        if (HTTP_Request::POST == $this->request->method())
        {
            $id      = $_POST['id'];
            $title   = $_POST['title'];
            $content = $_POST['content'];

            $article = ORM::factory('Article', $id);
            $article->title   = $title;
            $article->content = $content;
            $article->save();

            $_POST = array();
            Controller::redirect("noticias/?sucesso=Editado com sucesso");
        }
    }

    public function action_delete(){
        $id = $this->request->param('id');
        $article = ORM::factory('Article', $id);
        $article->delete();

        $_POST = array();
        Controller::redirect("noticias/?sucesso=Deletado com sucesso");
    }

    public function action_criar(){
        if (HTTP_Request::POST == $this->request->method())
        {
            $title   = $_POST['title'];
            $content = $_POST['content'];

            $article = ORM::factory('Article');
            $article->title   = $_POST['title'];
            $article->content = $_POST['content'];
            $article->ativo   = 1;
            $article->save();

            $_POST = array();
            Controller::redirect("noticias/?sucesso=Notícia cadastrada com sucesso");
        }
    }
}
?>