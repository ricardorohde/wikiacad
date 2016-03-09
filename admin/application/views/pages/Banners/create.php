<section class="content-header">
	<h1>
		Banners
	</h1>
	<ol class="breadcrumb">
		<li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Banners</li>
	</ol>
</section>

<?php if (isset($_GET['sucesso'])) : ?>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-success" role="alert"><?php echo $_GET['sucesso']; ?></div>
		</div>
	</div>
<?php endif; ?>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cadastro de dados</h3>
                </div>
                <div class="box-body">
                    <form action="banners/create" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="file" class="input-lg" required name="imagem" id="imagem" />
                        </div>
                        <div class="form-group">
                            <label>Destaque 01</label>
                            <input type="text" class="form-control input-lg" placeholder="destaque" name="destaque1">
                        </div>
                        <div class="form-group">
                            <label>Destaque 02</label>
                            <input type="text" class="form-control input-lg" placeholder="destaque" name="destaque2">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat btn-lg">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>
</section>