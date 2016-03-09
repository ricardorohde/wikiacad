<section class="content-header">
    <h1>
        Banners
    </h1>
    <ol class="breadcrumb">
        <li><a href="default"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Banners</li>
    </ol>
</section>

<?php if (isset($_GET['sucesso'])) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert"><?php echo $_GET['sucesso']; ?></div>
        </div>
    </div>
<?php endif; ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Cadastro de banner para a home do site</h3>
                </div>
                <div class="box-body">
                    <form action="banners/change" role="form" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $banner->id; ?>" name="id">
                        <div class="form-group">
                            <label>Imagem</label> <span style="color:#999">Largura mínima: 1600px, Altura mínima: 494px</span>
                            <input type="file" class="input-lg" name="imagem" id="imagem"  title="escolha uma imagem"/>
                        </div>
                        <div class="form-group">
                            <label>Destaque 01</label>
                            <input type="text" class="form-control input-lg" value="<?php echo $banner->destaque1; ?>" placeholder="destaque" name="destaque1">
                        </div>
                        <div class="form-group">
                            <label>Destaque 02</label>
                            <textarea placeholder="destaque" name="destaque2" class="textarea"><?php echo $banner->destaque2; ?></textarea>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat btn-lg"><i class="fa fa-save"></i> Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>