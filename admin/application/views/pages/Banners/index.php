<section class="content-header">
	<h1>
		Banners
	</h1>
	<br>
	<a href="banners/create" class="btn btn-primary btn-flat"><i class="fa fa-fw fa-plus"></i> Adicionar banner</a>
	<ol class="breadcrumb">
		<li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Banners</li>
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
					<h3 class="box-title">Lista de banners cadastrados</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Banner</th>
								<th width="80"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($banners as $banner) : ?>
							<tr>
								<td><a href="banners/edit/<?php echo $banner->id; ?>"><img src="../uploads/<?php echo $banner->imagem; ?>" width="100%"></a></td>
								<td>
									<a href="banners/delete/<?php echo $banner->id; ?>" class="btn btn-danger btn-xs"><i class="ion-trash-a"></i> <span class="hidden-xs">Excluir</span></a>
									<a href="banners/edit/<?php echo $banner->id; ?>" class="btn btn-warning btn-xs btn-edit"><i class="ion-edit"></i> <span class="hidden-xs">Editar&nbsp;</span></a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Banner</th>
								<th></th>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</section>