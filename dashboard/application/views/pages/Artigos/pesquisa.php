<section class="content-header">
    <h1>
        Lista de artigos com a palavra "<i><b><?php echo $_GET['q']; ?></b></i>"
    </h1>
    <br>
    <ol class="breadcrumb">
        <li><a href="default"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Artigos</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php if (count($articles) > 0): ?>

                <ul style="padding: 0;">
                <?php foreach ($articles as $article) : ?>
                    <li style="list-style: none;">
                        <b><a href="artigos/view/<?php echo $article->id; ?>"><?php echo Text::limit_chars($article->title, 65); ?></a></b><br>
                        <span><a href="artigos/view/<?php echo $article->id; ?>"><?php echo strip_tags(Text::limit_chars($article->content, 65)); ?></a></span><br>
                        <span><?php echo $nascimento   = date("d/m/Y", strtotime($article->added)); ?></span> - 
                        <span><b>por:</b> <?php echo $article->user->student->nome; ?></span><br>
                        <!-- <span class="center">
                            <a href="artigos/view/<?php echo $article->id; ?>"><span class="glyphicon glyphicon-eye-open btn btn-default btn-sm"></span></a>
                            <a href="artigos/edit/<?php echo $article->id; ?>"><span class="glyphicon glyphicon-pencil btn btn-default btn-sm"></span></a>
                        </span> -->
                    </li><br>
                <?php endforeach; ?>
                </ul>

            <?php else: ?>
                <div class="callout callout-danger" style="text-align:center;">
                    <h3>Não foi encontrado nenhum artigo com a palavra "<i><b><?php echo $_GET['q']; ?></b></i>"</h3>
                    <br><br>
                    <h4>Faça uma nova busca:</h4>
                    <form action="artigos/pesquisa" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Artigos...">
                            <span class="input-group-btn">
                                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>