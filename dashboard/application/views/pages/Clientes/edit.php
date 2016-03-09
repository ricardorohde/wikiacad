<a href="clientes/" class="btn btn-default btn-sm"><< voltar</a><br><br>
  <form action="clientes/change" class="cadastro" role="form" method="post">
    <h2>Cadastro</h2>
  <div class="row">
    <div class="col-sm-6">
    <input type="hidden" name="id" value="<?php echo $user->id; ?>" >
      <div class="form-group">
      <label class="control-label" for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>" autofocus>
      </div>

      <div class="form-group">
      <label class="control-label" for="username">Usuário</label>
        <input type="text" class="form-control" name="username" name="username" value="<?php echo $user->username; ?>" >
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
      <label class="control-label" for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" >
      </div>

      <div class="form-group">
      <label class="control-label" for="confirmPassword">Confirme Senha</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
      </div>
    </div>
  </div>

    <div class="form-group">
      <button class="btn btn-lg btn-primary" type="submit">Alterar</button>
    </div>

    <?php if (isset($_GET['erro'])) : ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_GET['erro']; ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['sucesso'])) : ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_GET['sucesso']; ?>
      </div>
    <?php endif; ?>
  </form>
