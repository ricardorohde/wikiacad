<a href="noticias/" class="btn btn-default btn-sm"><< voltar</a><br><br>
<form action="noticias/change" method="post">
	<input type="hidden" name="id" value="<?php echo $article->id; ?>">
	<div class="form-group">
		<label class="control-label" for="title">Título</label>
		<input class="form-control input-md" type="text" name="title" id="title" value="<?php echo $article->title; ?>">
    </div>
    <div class="form-group">
		<label class="control-label" for="editor">Notícia</label>
		<textarea class="form-control input-md" name="content" id="editor"><?php echo $article->content; ?></textarea>
	</div>
		<button id="cadastrar" type="submit" name="cadastrar" class="btn btn-primary btn-lg">Alterar</button>
</form>