<div class="wrapper">
    <header class="main-header">
        <a href="dashboard" class="logo">
            <span class="logo-mini"><b>SB</b>R.</span>
            <span class="logo-lg"><b>SB</b>Racks</span>
        </a>

        <?php if(Auth::instance()->logged_in() && Auth::instance()->get_user()->has('roles', 2) ): ?>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="hidden-xs">Administrador</span>
                            </a>
                            <ul class="dropdown-menu" style="width: 190px">
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="users" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="default/logout" class="btn btn-default btn-flat">Deslogar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="default/logout"><i class="fa fa-sign-out"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
    </header>

    <?php if(Auth::instance()->logged_in() && Auth::instance()->get_user()->has('roles', 2) ): ?>
    <aside class="main-sidebar">
        <section class="sidebar">
            <?php
            $url = NULL;
            if (isset($_SERVER['PATH_INFO'])) {
                $url = explode("/",$_SERVER['PATH_INFO']);
            }
            ?>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">MENU</li>
                <li <?php echo ($url[1] == 'dashboard') ? "class='active'" : "" ; ?>><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
                <li <?php echo ($url[1] == 'sbracks') ? "class='active'" : "" ; ?>><a href="sbracks"><i class="fa fa-list-ul"></i> <span>A SB Racks</span></a></li>
                <li <?php echo ($url[1] == 'banners') ? "class='active'" : "" ; ?>><a href="banners"><i class="fa fa-image"></i> <span>Banners</span></a></li>
                <li <?php echo ($url[1] == 'products') ? "class='active'" : "" ; ?>><a href="products"><i class="fa fa-barcode"></i> <span>Produtos</span></a></li>
                <li <?php echo ($url[1] == 'mensagens') ? "class='active'" : "" ; ?>><a href="mensagens"><i class="fa fa-envelope"></i> <span>Mensagens</span></a></li>
                <li <?php echo ($url[1] == 'users') ? "class='active'" : "" ; ?>><a href="users"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
    <?php endif; ?>