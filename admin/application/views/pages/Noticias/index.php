<?php if (isset($_GET['sucesso'])) : ?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success" role="alert"><?php echo $_GET['sucesso']; ?></div>
  </div>
</div>
<?php endif; ?>
<a href="noticias/create" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" style="color:#fff !important;"></span> Cadastrar Notícia</a>
<br><br>
<div class="table-responsive">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
			<tr>
				<th>Data</th>
				<th>Título</th>
				<th>Texto</th>
				<th width="53px"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($articles as $article) : ?>
			<tr>
				<td><?php echo $nascimento   = date("d/m/Y", strtotime($article->added)); ?></td>
				<td><a href="noticias/edit/<?php echo $article->id; ?>"><?php echo Text::limit_chars($article->title, 65); ?></a></td>
				<td><a href="noticias/edit/<?php echo $article->id; ?>"><?php echo strip_tags(Text::limit_chars($article->content, 65)); ?></a></td>
				<td class="center">
					<a href="noticias/delete/<?php echo $article->id; ?>"><span class="glyphicon glyphicon-trash btn btn-default btn-sm"></span></a>
					<a href="noticias/edit/<?php echo $article->id; ?>"><span class="glyphicon glyphicon-pencil btn btn-default btn-sm"></span></a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>