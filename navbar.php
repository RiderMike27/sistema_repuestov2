<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistema de Repuestos</a>
            </div>
            
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  Administrador <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <div class="collapse navbar-collapse navbar-ex1-collapse">
            
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php ?>">
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Inicio</a>
                    </li>
                    <li class="<?php ?>" id="add-new-item">
                        <a href="#"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Compras</a>
                    </li>
                    <li class="<?php ?>">
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Ventas</a>
                    </li>
                    <li class="<?php ?>">
                        <a href="stock.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Inventario</a>
                    </li>
                     <li class="<?php ?>">
                        <a href="expired.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reportes</a>
                    </li>
                    <li class="<?php ?>">
                        <a href="sales.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span> Usuarios</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>