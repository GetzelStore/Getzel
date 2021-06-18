<div class="row">
    <div class="col-12 col-sm-5 col-md-4 col-lg-3">
        <div class="shop_sidebar_area">

            <!-- Single Widget -->
            <div class="widget catagory mb-30">
                <h6 class="widget-title">Marca de producto</h6>
                <div class="widget-desc">
                    <!-- Single Checkbox -->
                    <?php if ($_GET['products'] == 'Blackmagic' || $_GET['products'] == 'all'): ?>
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">BlackMagic <span
                                class="text-muted">(6)</span></label>
                    </div>
                    
                    <?php endif; ?>


                    <?php if ($_GET['products'] == 'Belden' || $_GET['products'] == 'all'): ?>
                    <!-- Single Checkbox -->
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Belden <span
                                class="text-muted">(6)</span></label>
                    </div>
                    <?php endif; ?>
                    
                </div>
            </div>

            <!-- Single Widget -->
            <div class="widget price mb-30">
                <h6 class="widget-title">Rango de precio</h6>
                <div class="widget-desc">
                    <div class="slider-range">
                        <div data-min="0" data-max="4000" data-unit="$"
                            class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                            data-value-min="0" data-value-max="4000" data-label-result="Precio:">
                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        </div>
                        <div class="range-price">Precio: $0 - $4000</div>
                    </div>
                </div>
            </div>

            <!-- Single Widget -->
            <div class="widget color mb-30">
                <h6 class="widget-title">Filtro por color</h6>
                <div class="widget-desc">
                    <!-- Single Checkbox -->
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label black" for="customCheck6">Black <span
                                class="text-muted">(9)</span></label>
                    </div>
                    <!-- Single Checkbox -->
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label pink" for="customCheck7">Pink <span
                                class="text-muted">(6)</span></label>
                    </div>
                    <!-- Single Checkbox -->
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                        <label class="custom-control-label red" for="customCheck8">Red <span
                                class="text-muted">(8)</span></label>
                    </div>
                    <!-- Single Checkbox -->
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                        <label class="custom-control-label purple" for="customCheck9">Purple <span
                                class="text-muted">(4)</span></label>
                    </div>
                    <!-- Single Checkbox -->
                    <div class="custom-control custom-checkbox d-flex align-items-center">
                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                        <label class="custom-control-label orange" for="customCheck10">Orange <span
                                class="text-muted">(7)</span></label>
                    </div>
                </div>
            </div>


            <!-- Single Widget -->
            <div class="widget rating mb-30">
                <h6 class="widget-title">Rating</h6>
                <div class="widget-desc">
                    <ul>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                    class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <span class="text-muted">(103)</span></a></li>

                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                    class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                    aria-hidden="true"></i> <span class="text-muted">(78)</span></a></li>

                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                    class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o"
                                    aria-hidden="true"></i> <span class="text-muted">(47)</span></a></li>

                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i
                                    class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o"
                                    aria-hidden="true"></i> <span class="text-muted">(9)</span></a></li>

                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                    aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i
                                    class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o"
                                    aria-hidden="true"></i> <span class="text-muted">(3)</span></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <div class="col-12 col-sm-7 col-md-8 col-lg-9">
        <!-- Shop Top Sidebar -->
        <div class="shop_top_sidebar_area d-flex flex-wrap align-items-center justify-content-between">
            
            <select class="small right ml-auto">
                <option selected>Ordenar por popularidad</option>
                <option value="1">Ordenar por ventas</option>
                <option value="3">Ordenar por más reciente</option>
            </select>
        </div>

        <div class="shop_grid_product_area">
            <div class="row justify-content-center">



                <?php if ($_GET['products'] == 'Blackmagic' || $_GET['products'] == 'all'): ?>
                <!-- BlackMagic -->
                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/mini1.png" alt="">
                            <img class="hover_img p-3" src="img/mini2.png" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>New</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Atem Mini</p>
                            <p class="desc_short">
                                Switcher con 4 entradas HDMI que soporta video HD en 1080p60, cuenta con DVE y Keyer. Al conectarlo por el puerto USB a una PC, lo detecta como cámara Web, además poderlo operar a través de conexión Ethernet.
                            </p>
                            <h6 class="product-price">USD$295.00</h6>
                            <input type="hidden" name="price" class="val_price" value="295.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/pro.png" alt="">
                            <img class="hover_img p-3" src="img/pro3.png" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>New</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Atem Mini Pro</p>
                            <p class="desc_short">
                                Permite grabar por USB en disco duro externo en formato H.264. Permite hacer transmisiones directas por el puerto Ethernet a plataformas como YouTube Live, Facebook Live, Twitch y más. Dispone de salida de multipantalla para ver todas las entradas de video, Previo y Program.
                            </p>
                            <h6 class="product-price">USD$495.00</h6>
                            <input type="hidden" name="price" class="val_price" value="495.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/proiso3.png" alt="">
                            <img class="hover_img p-3" src="img/iso.png" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>New</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Atem Mini Pro Iso</p>
                            <p class="desc_short">
                                Este modelo permite la grabación de sus entradas y la salida de la mezcla como fuentes para la edición. Genera un archivo de proyecto con el audio, los gráficos y otros elementos para DaVinci Resolve para editar más rápido.
                            </p>
                            <h6 class="product-price">USD$795.00</h6>
                            <input type="hidden" name="price" class="val_price" value="795.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/extreme.png" alt="">
                            <img class="hover_img p-auto" src="img/extreme1.png" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>New</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Atem Mini Extreme</p>
                            <p class="desc_short"> 
                                Switcher de video en total con Ocho entradas en HDMI con resincronización y conversión de formato en cada una y dos salidas de video en HDMI. Dos entradas de micrófono y una salida de audífonos. Trasmisión directa por Streaming usando protocolo RTMP.
                            </p>
                            <h6 class="product-price">USD$995.00</h6>
                            <input type="hidden" name="price" class="val_price" value="995.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/extremeiso3.png" alt="">
                            <img class="hover_img p-3" src="img/extremeiso1.png" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>New</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Atem Mini Extreme Iso</p>
                            <p class="desc_short"> 
                                Permite la grabación de sus entradas y la salida de la mezcla como fuentes para la edición. Genera un archivo de proyecto con el audio, los gráficos y otros elementos como DaVinci Resolve para editar más rápido.
                            </p>
                            <h6 class="product-price">USD$1,295.00</h6>
                            <input type="hidden" name="price" class="val_price" value="1295.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <?php endif; ?>



                <?php if ($_GET['products'] == 'Belden' || $_GET['products'] == 'all'): ?>
                <!-- Belden -->
                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/coax1.png" alt="">
                            <img class="hover_img p-3" src="img/coax2.png" alt="">

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Cable Coaxial Digital</p>
                            <p class="desc_short">
                                Cable coaxial digital  RG179 ultraminiatura calibre 28,5, impedancia  75ohms, 95% de malla, CMR.
                            </p>
                            <h6 class="product-price">USD$15.00</h6>
                            <input type="hidden" name="price" class="val_price" value="295.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/coax2.png" alt="">
                            <img class="hover_img p-3" src="img/coax5.png" alt="">

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Cable Coaxial Digital Mini</p>
                            <p class="desc_short">
                                Cable coaxial digital  Mini RG-59 calibre 23 impedancia  75ohms, 95% de malla, CMR.
                            </p>
                            <h6 class="product-price">USD$25.00</h6>
                            <input type="hidden" name="price" class="val_price" value="495.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/coax4.png" alt="">
                            <img class="hover_img p-3" src="img/coax5.png" alt="">

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Cable coaxial Flexible RG-59</p>
                            <p class="desc_short">
                                Cable coaxial Flexible RG-59 calibre 22 impedancia  75ohms, 95% de malla, CM.
                            </p>
                            <h6 class="product-price">USD$79.00</h6>
                            <input type="hidden" name="price" class="val_price" value="795.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/coax4.png" alt="">
                            <img class="hover_img p-3" src="img/coax5.png" alt="">

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name"> Cable coaxial digital RG-6</p>
                            <p class="desc_short"> 
                                Cable coaxial digital  RG-6 calibre 18 impedancia  75ohms, 95% de malla, CMR.
                            </p>
                            <h6 class="product-price">USD$60.24</h6>
                            <input type="hidden" name="price" class="val_price" value="601.24">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img p-3" src="img/coax5.png" alt="">
                            <img class="hover_img p-3" src="img/coax1.png" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>New</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="#"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#test-popup" data-effect="mfp-zoom-out" class="modQuickView"><i class="icofont-eye-alt"></i> Vista previa </a>
                            </div>

                            <p class="brand_name">Cable Coaxial 4K UHD </p>
                            <p class="desc_short"> 
                                Permite la grabación de sus entradas y la salida de la mezcla como fuentes para la edición. Genera un archivo de proyecto con el audio, los gráficos y otros elementos como DaVinci Resolve para editar más rápido.
                            </p>
                            <h6 class="product-price">USD$89.00</h6>
                            <input type="hidden" name="price" class="val_price" value="895.00">

                            <a class="to_cart mt-3" href="javascript:;" data-cart="page">
                                <div class="botonTextoIcono ">
                                    <label class="labelBoton">Agregar al carrito</label>
                                    <div class="icono">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                            <path d="M2 6h10l10 40h32l8-24H16"></path>
                                            <circle cx="23" cy="54" r="4"></circle>
                                            <circle cx="49" cy="54" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <?php endif; ?>


            </div>
        </div>

        <!-- Shop Pagination Area -->
        <div class="shop_pagination_area mt-30">
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>