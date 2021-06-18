    <!-- Breadcumb Area -->
    <div class="breadcumb_area bg-black2">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5><?php echo $titleh5; ?></h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        
                        <?php if ($paginaActiva == 'products'): ?>
                            <li class="breadcrumb-item <?php if ($_GET['products'] == 'select') {echo 'active';}?>">
                                <?php if ($_GET['products'] == 'select'):?>
                                    Productos
                                <?php else: ?>
                                    <a href="products.php?products=select">Productos</a>
                                <?php endif; ?>
                            </li>
                            <?php if ($_GET['products'] != 'select'): ?>
                            <li class="breadcrumb-item active"><?php echo $titleh5; ?></li>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if ($paginaActiva == 'login'): ?>
                            <li class="breadcrumb-item active">Acceso & Registro</li>
                        <?php endif; ?>


                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->