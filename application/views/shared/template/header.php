
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="default"><img src="media/img/logo.png" alt="Wiki ACAD" title="Wiki ACAD" style="float:left"></a>
                    <span class="brand-desc hidden-sm">
                        Acervo de artigos
                    </span>
                </div>
            </div>
            <div class="col-md-8">
                <div id="navbar" class="navbar-collapse collapse">
                    <div class="nav navbar-nav navbar-right">
                        <form class="form-inline login" action="login" role="form" method="post">
                            <div class="form-group boxInput">
                                <label for="email">Email</label>
                                <input type="email" required name="username" class="form-control" id="email" ><!-- placeholder="nome@exemplo.com" -->
                            </div>
                            <div class="form-group boxInput">
                                <label for="senha">Senha</label>
                                <input type="password" required name="password" class="form-control" id="senha">
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <div class="clearfix"></div>
                            <div class="row checkbox">
                                <label class="col-xs-12"><input type="checkbox" name="remember">Manter conectado</label>
                            </div>
                            <a href="cadastro" class="btn-cadastre-se btn btn-default">cadastre-se</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['erro'])) : ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert"><?php echo $_GET['erro']; ?></div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['sucesso'])) : ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert"><?php echo $_GET['sucesso']; ?></div>
            </div>
        </div>
    <?php endif; ?>
</nav>
