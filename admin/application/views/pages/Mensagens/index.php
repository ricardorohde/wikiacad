<section class="content-header">
    <h1>
        Mensagens
        <!-- <small>13 novas mensagens</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mensagens</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Inbox</h3>
                    <!-- <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <input type="text" class="form-control input-sm" placeholder="Procurar mensagem">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div> -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <?php foreach($messages as $message): ?>
                                <tr>
                                    <td class="mailbox-name"><a href="mensagens/view/<?php echo $message->id; ?>"><?php echo $message->nome; ?></a></td>
                                    <td class="mailbox-subject"><b><?php echo $message->email; ?></b> - <?php echo Text::limit_chars($message->mensagem, 130); ?></td>
                                    <td class="mailbox-date"><a href="mensagens/delete/<?php echo $message->id; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table><!-- /.table -->
                    </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
            </div><!-- /. box