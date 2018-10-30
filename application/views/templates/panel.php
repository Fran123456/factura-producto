
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php echo base_url()?>">
                    <img src="<?php echo base_url()?>assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                         <li>
                            <a href="<?php echo  base_url()?>dashboard">
                                <i class="fas fa-home"></i>Dasboard</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-money-bill-alt"></i>Factura</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                    <a href="<?php echo  base_url()?>add-factura"><i class="fas fa-shopping-cart"></i>Crea una factura</a>
                                 </li>
                                <li>
                                    <a href="<?php echo  base_url()?>facturas"><i class="fas fa-archive"></i>Ver facturas</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url()?>category">
                                <i class="fas fa-clipboard"></i>Categorias</a>
                        </li>

                        <li>
                            <a href="<?php echo  base_url()?>products">
                                <i class="far fa-lemon"></i>Productos</a>
                        </li>

                        <li>
                            <a href="<?php echo  base_url()?>clientes">
                                <i class="fas fa-users"></i>Clientes</a>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->