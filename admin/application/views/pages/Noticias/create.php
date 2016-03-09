<a href="noticias/" class="btn btn-default btn-sm"><< voltar</a><br><br>
<form action="noticias/create" method="post">
	<legend>Cadastro de Notícia</legend>
	<div class="form-group">
		<label class="control-label" for="title">Título</label>
		<input class="form-control input-md" type="text" name="title" id="title">
    </div>
    <div class="form-group">
		<label class="control-label" for="editor">Notícia</label>
		<textarea class="form-control input-md" name="content" id="editor"></textarea>
	</div>
		<button id="cadastrar" type="submit" name="cadastrar" class="btn btn-primary btn-lg">Cadastrar</button>
</form>