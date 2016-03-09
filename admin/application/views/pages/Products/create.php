<section class="content-header">
	<h1>
		Produtos
	</h1>
	<ol class="breadcrumb">
		<li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Produtos</li>
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
                    <form action="products/create" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Produto</label>
                            <input type="text" class="form-control input-lg" placeholder="Email" name="produto" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="file" class="input-lg" name="imagem" id="imagem" />
                        </div>
                        <div class="form-group">
                            <label>Dimensões</label>
                            <input type="text" class="form-control input-lg" placeholder="dimensoes" name="dimensoes">
                        </div>
                        <div class="form-group">
                            <label>Capacidade</label>
                            <input type="text" class="form-control input-lg" placeholder="capacidade" name="capacidade">
                        </div>
                        <div class="form-group">
                            <label>Movimentação</label>
                            <input type="text" class="form-control input-lg" placeholder="movimentacao" name="movimentacao">
                        </div>
                        <div class="form-group">
                            <label>Empilhamento</label>
                            <input type="text" class="form-control input-lg" placeholder="empilhamento" name="empilhamento">
                        </div>
                        <div class="form-group">
                            <label>Tipo</label>
                            <input type="text" class="form-control input-lg" placeholder="tipo" name="tipo">
                        </div>
                        <div class="form-group">
                            <label>Preço</label>
                            <input type="text" class="form-control input-lg" placeholder="preco" name="preco">
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" class="form-control input-lg" placeholder="descricao" name="descricao">
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