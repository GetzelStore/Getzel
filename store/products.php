<?php 

/* BASE_DATOS: Traer marcas de base */

if (!isset($_GET['products'])) {
    header('Location: products.php?products=all');
} elseif ($_GET['products'] == 'all' || $_GET['products'] == 'Belden' || $_GET['products'] == 'Blackmagic' || $_GET['products'] == 'select') {
    if ($_GET['products'] == 'all') {
        $titleh5 = 'Todos los productos';
    } elseif ($_GET['products'] == 'select'){
        $titleh5 = 'Selecciona la marca';
    }else {
        $titleh5 = $_GET['products'];
    }
} else {
    header('Location: products.php?products=all');
}

require 'templates/header.php';
require 'templates/breadcumb.php';


?>


    <!-- Product Area -->
    <section class="shop_grid_area section_padding_50 bg-purple-black">
        <div class="container">
            <?php
            if ( $_GET['products'] == 'select') {
                require 'templates/product-select.php';
            } else {
                require 'templates/product-list.php';
            }

            ?>
            
        </div>
    </section>
    <!-- Product Area -->
    
<?php 
require 'templates/quick_view.php';
require 'templates/footer.php'
?>