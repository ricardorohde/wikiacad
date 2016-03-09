<section class="content-header">
    <h1>
        Informações sobre a SB Racks
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Quem somos</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Alteração dos dados sobre a empresa</h3>
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
                    <form action="sbracks/change" role="form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $sbracks->id; ?>">
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="input-lg" name="logo" id="imagem" />
                            <img src="../uploads/<?php echo $sbracks->logo; ?>" width="80">
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control input-lg" value="<?php echo $sbracks->endereco; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="telefone" class="form-control input-lg" value="<?php echo $sbracks->telefone; ?>">
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div style="padding: 10px;">
                                    <label>Resumo Home - Quadro 01</label>
                                    <div class="form-group">
                                        <textarea name="resumo1" class="form-control" rows="3" ><?php echo $sbracks->resumo1; ?></textarea>
                                    </div>
                                    <label>Icone</label>
                                    <div class="form-group">
                                        <input type="file" class="input-lg" name="icon_resumo1" />
                                        <img src="../uploads/<?php echo $sbracks->icon_resumo1; ?>" width="80">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="background: #ededed; padding: 10px;">
                                    <label>Resumo Home - Quadro 02</label>
                                    <div class="form-group">
                                        <textarea name="resumo2" class="form-control" rows="3" ><?php echo $sbracks->resumo2; ?></textarea>
                                    </div>
                                    <label>Icone</label>
                                    <div class="form-group">
                                        <input type="file" class="input-lg" name="icon_resumo2" />
                                        <img src="../uploads/<?php echo $sbracks->icon_resumo2; ?>" width="80">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div style="background: #ededed; padding: 10px;">
                                    <label>Resumo Home - Quadro 03</label>
                                    <div class="form-group">
                                        <textarea name="resumo3" class="form-control" rows="3" ><?php echo $sbracks->resumo3; ?></textarea>
                                    </div>
                                    <label>Icone</label>
                                    <div class="form-group">
                                        <input type="file" class="input-lg" name="icon_resumo3" />
                                        <img src="../uploads/<?php echo $sbracks->icon_resumo3; ?>" width="80">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="padding: 10px;">
                                    <label>Resumo Home - Quadro 04</label>
                                    <div class="form-group">
                                        <textarea name="resumo4" class="form-control" rows="3" ><?php echo $sbracks->resumo4; ?></textarea>
                                    </div>
                                    <label>Icone</label>
                                    <div class="form-group">
                                        <input type="file" class="input-lg" name="icon_resumo4" />
                                        <img src="../uploads/<?php echo $sbracks->icon_resumo4; ?>" width="80">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                            <label>Quem Somos</label>
                            <textarea name="info" class="textarea"><?php echo $sbracks->info; ?></textarea>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                            <label>Visão</label>
                            <textarea name="visao" class="textarea"><?php echo $sbracks->visao; ?></textarea>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                            <label>Valores</label>
                            <textarea name="valores" class="textarea"><?php echo $sbracks->valores; ?></textarea>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                            <label>Missão</label>
                            <textarea name="missao" class="textarea"><?php echo $sbracks->missao; ?></textarea>
                        </div>
                        <hr>
                        <br>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat btn-lg">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>