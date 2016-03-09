<section class="content-header">
	<h1>
		Artigos
	</h1>
	<ol class="breadcrumb">
		<li><a href="default"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="dashboard/artigos"><i class="fa fa-book"></i> Artigos</a></li>
		<li class="active">Cadastro</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Cadastro de dados</h3>
                </div>
                <div class="box-body">
                    <form action="artigos/criar" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titulo</label>
                            <input maxlength="150" type="text" class="form-control input-lg" required placeholder="titulo" name="title" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Conteúdo</label>
                            <textarea name="content" class="textarea" required></textarea>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat btn-lg"><i class="fa fa-save"></i> Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>
</section>