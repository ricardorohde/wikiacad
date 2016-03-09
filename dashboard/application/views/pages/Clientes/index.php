<?php if (isset($_GET['sucesso'])) : ?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success" role="alert"><?php echo $_GET['sucesso']; ?></div>
  </div>
</div>
<?php endif; ?>
<a href="clientes/create" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" style="color:#fff !important;"></span> Cadastrar Cliente</a>
<br><br>
<div class="table-responsive">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
			<tr>
				<th>id</th>
				<th>Email</th>
				<th>Username</th>
				<th width="53px"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user) : ?>
			<tr>
				<td><?php echo $user->id; ?></td>
				<td><a href="clientes/edit/<?php echo $user->id; ?>"><?php echo $user->email; ?></a></td>
				<td><a href="clientes/edit/<?php echo $user->id; ?>"><?php echo $user->username; ?></a></td>
				<td class="center">
					<a href="clientes/delete/<?php echo $user->id; ?>"><span class="glyphicon glyphicon-trash btn btn-default btn-sm"></span></a>
					<a href="clientes/edit/<?php echo $user->id; ?>"><span class="glyphicon glyphicon-pencil btn btn-default btn-sm"></span></a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>