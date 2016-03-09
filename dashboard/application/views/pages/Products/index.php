<section class="content-header">
	<h1>
		Produtos
	</h1>
	<br>
	<a href="products/create" class="btn btn-primary btn-flat"><i class="fa fa-fw fa-plus"></i> Adicionar produtos</a>
	<ol class="breadcrumb">
		<li><a href="default"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Produtos</li>
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
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Lista de produtos cadastrados</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th></th>
								<th>Produto</th>
								<th class="hidden-xs">Dimensões</th>
								<th class="hidden-xs">Descrição</th>
								<th width="80"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($products as $product) : ?>
							<tr>
								<td><img src="../uploads/_thumb<?php echo $product->imagem; ?>" width="80"></td>
								<td><a href="products/edit/<?php echo $product->id; ?>"><?php echo $product->produto; ?></a></td>
								<td class="hidden-xs"><?php echo $product->dimensoes; ?></td>
								<td class="hidden-xs"><?php echo Text::limit_chars($product->descricao, 130); ?></td>
								<td>
									<a href="products/delete/<?php echo $product->id; ?>" class="btn btn-danger btn-xs"><i class="ion-trash-a"></i> <span class="hidden-xs">Excluir</span></a>
									<a href="products/edit/<?php echo $product->id; ?>" class="btn btn-warning btn-xs btn-edit"><i class="ion-edit"></i> <span class="hidden-xs">Editar&nbsp;</span></a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
						<tfoot>
							<tr>
								<th></th>
								<th>Produto</th>
								<th class="hidden-xs">Dimensões</th>
								<th class="hidden-xs">Descrição</th>
								<th></th>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</section>