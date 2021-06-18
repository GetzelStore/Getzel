<div class="classy-nav-container breakpoint-off">
    <nav class="classy-navbar bg-black" id="bigshopNav">

        <!-- Nav Brand -->
        <a href="index.php" class="nav-brand logoNav mr-0">
            <img src="../assets/img/Getzel-cube.png" alt="logo">
        </a>

        <!-- Toggler -->
        <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
        </div>

        <!-- Menu -->
        <div class="classy-menu bg-black">
            <!-- Close -->
            <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top bg-white"></span><span class="bottom bg-white"></span></div>
            </div>

            <!-- Nav -->
            <div class="classynav">
                <ul>
                    <li><a href="#" class="navItem bg-black">Productos</a>
                        <ul class="dropdown bg-white">
                            <li><a href="products.php?products=Belden">Belden</a></li>
                            <li><a href="products.php?products=Blackmagic">BlackMagic</a></li>
                            <li><a href="products.php?products=all">Ver todos</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="navItem bg-black">Categorias</a>
                        <ul class="dropdown bg-white">
                            <li><a href="#">Accesorios</a></li>
                            <li><a href="#">Bocinas</a></li>
                            <li><a href="#">Cámaras</a></li>
                            <li><a href="#">Cables</a></li>
                            <li><a href="#">Switcher</a></li>

                        </ul>
                    </li>
                    <li><a href="../index.php#contacto" class="navItem bg-black">Contáctanos</a></li>
                </ul>
            </div>
        </div>

        <!-- Hero Meta -->
        <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
            <!-- Search -->
            <div class="search-area">
                <div class="search-btn"><i class="icofont-search"></i></div>
                <!-- Form -->
                <div class="search-form">
                    <input type="search" class="form-control" placeholder="Search">
                    <input type="submit" class="d-none" value="Send">
                </div>
            </div>

            <!-- Wishlist -->
            <div class="wishlist-area">
                <a href="wishlist.html" class="wishlist-btn"><i class="icofont-heart"></i></a>
            </div>

            <!-- Cart -->
            <?php require 'cart.php' ?>

            <!-- Account -->
            <div class="account-area">
                <div class="user-thumbnail">
                    <img src="img/avatar.png" alt="">
                </div>
                <ul class="user-meta-dropdown">
                    <li class="user-title"><span>Hello,</span> User</li>
                    <li><a href="my-account.html">Mi cuenta</a></li>
                    <li><a href="order-list.html">Orders list</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="login.php"><i class="icofont-logout"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>