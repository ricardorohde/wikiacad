<section class="content-header">
	<h1>
		Produtos
	</h1>
	<ol class="breadcrumb">
		<li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Produtos</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ateração dos dados</h3>
                </div>
                <div class="box-body">
                    <form action="products/change" role="form" method="post">
					    <input type="hidden" name="id" value="<?php echo $product->id; ?>" >
                        <div class="form-group">
                            <label>Produto</label>
                            <input type="text" class="form-control" placeholder="Email" name="produto" value="<?php echo $product->produto; ?>" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Dimensões</label>
                            <input type="text" class="form-control" placeholder="dimensoes" value="<?php echo $product->dimensoes; ?>" name="dimensoes">
                        </div>
                        <div class="form-group">
                            <label>Capacidade</label>
                            <input type="text" class="form-control" placeholder="capacidade" value="<?php echo $product->capacidade; ?>" name="capacidade">
                        </div>
                        <div class="form-group">
                            <label>Movimentação</label>
                            <input type="text" class="form-control" placeholder="movimentacao" value="<?php echo $product->movimentacao; ?>" name="movimentacao">
                        </div>
                        <div class="form-group">
                            <label>Empilhamento</label>
                            <input type="text" class="form-control" placeholder="empilhamento" value="<?php echo $product->empilhamento; ?>" name="empilhamento">
                        </div>
                        <div class="form-group">
                            <label>Tipo</label>
                            <input type="text" class="form-control" placeholder="tipo" value="<?php echo $product->tipo; ?>" name="tipo">
                        </div>
                        <div class="form-group">
                            <label>Preço</label>
                            <input type="text" class="form-control" placeholder="preco" value="<?php echo $product->preco; ?>" name="preco">
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" class="form-control" placeholder="descricao" value="<?php echo $product->descricao; ?>" name="descricao">
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