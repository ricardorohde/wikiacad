<section class="content-header">
    <h1>
        Artigos
    </h1>
    <br>
    <a href="artigos/criar" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-plus"></i> Criar artigo</a>
    <ol class="breadcrumb">
        <li><a href="default"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Artigos</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <?php if (isset($_GET['sucesso'])) : ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert"><?php echo $_GET['sucesso']; ?></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <?php if (count($articles) > 0): ?>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de artigos cadastrados</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th width="70px">Criado</th>
                                <th>Título</th>
                                <th>Prévia</th>
                                <th width="90px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articles as $article) : ?>
                                <tr>
                                    <td><?php echo $nascimento   = date("d/m/Y", strtotime($article->added)); ?></td>
                                    <td><a href="artigos/edit/<?php echo $article->id; ?>"><?php echo Text::limit_chars($article->title, 65); ?></a></td>
                                    <td><a href="artigos/edit/<?php echo $article->id; ?>"><?php echo strip_tags(Text::limit_chars($article->content, 65)); ?></a></td>
                                    <td class="center">
                                        <a href="artigos/delete/<?php echo $article->id; ?>"><span class="glyphicon glyphicon-trash btn btn-default btn-sm"></span></a>
                                        <a href="artigos/edit/<?php echo $article->id; ?>"><span class="glyphicon glyphicon-pencil btn btn-default btn-sm"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <?php else: ?>
                <div class="callout callout-danger">
                    <h4>Ainda não há dados cadastrados</h4>
                    <a href="artigos/criar">clique aqui</a> e cadastre seu primeiro <b>ARTIGO</b>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>