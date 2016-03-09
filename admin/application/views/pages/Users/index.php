<section class="content-header">
    <h1>
        Perfil
        <small>- <?php echo $user->email; ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Editar perfil</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Alteraçao dos dados</h3>
                </div>
                <div class="box-body">
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
                    <form action="users/change" role="form" method="post">
                        <input type="hidden" name="id" value="<?php echo $user->id; ?>" >
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control input-lg" placeholder="Email" name="email" value="<?php echo $user->email; ?>" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" class="form-control input-lg" placeholder="Usuário" name="username" value="<?php echo $user->username; ?>" >
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="text" class="form-control input-lg" placeholder="Senha" name="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirmar senha</label>
                                    <input type="text" class="form-control input-lg" placeholder="Confirmar senha" name="password_confirm">
                                </div>
                            </div>
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