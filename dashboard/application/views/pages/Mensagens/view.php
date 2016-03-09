<section class="content-header">
    <h1>
        Mensagem
    </h1>
    <ol class="breadcrumb">
        <li><a href="default"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mensagens</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-sm-12">
<div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Leitura de e-mail</h3>
                  <!-- <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                  </div> -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3><?php echo $message->nome; ?></h3>
                    <h5>De: <?php echo $message->email; ?> <?php echo $message->telefone; ?> <!-- <span class="mailbox-read-time pull-right">15 Feb. 2015 11:03 PM</span> --></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <a href="mensagens/delete/<?php echo $message->id; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
                      <!-- <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></button> -->
                    </div><!-- /.btn-group -->
                  </div><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    <p><?php echo $message->mensagem; ?></p>
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <!-- <div class="pull-right">
                    <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                  </div> -->
                  <a href="mensagens/delete/<?php echo $message->id; ?>" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</a>
                </div><!-- /.box-footer -->
              </div>