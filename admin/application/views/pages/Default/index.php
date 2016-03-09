<div class="login-box">
    <div class="login-box-body">
        <p class="login-box-msg">Faça o login para acessar o painel de controle.</p>

        <form method="post">
            <div class="form-group has-feedback">
                <input type="email" name="username" class="form-control input-lg" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control input-lg" placeholder="Senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="lembrar"> Manter logado
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
                </div><!-- /.col -->
            </div>

            <?php if (isset($_GET['erro'])) : ?>
                <div class="alert alert-danger" role="alert">
                    login não encontrado
                </div>
            <?php endif; ?>
        </form>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
