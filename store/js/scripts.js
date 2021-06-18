$(function () {

    /* Animate modal */
    $('.modQuickView').magnificPopup({
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });


    /* Animate qty product */
    $(document).on('click', '.qty_product .toCartBoton', function() {
        const boton = $(this);
        toCartCantidad(boton, boton.hasClass('mas') ? 'suma' : boton.hasClass('menos') ? 'resta' : null);
        let qty = $('.toCartCantidad').html();
        $('#qty').val(qty);
    });


    /* Selector img */
    $('.quickview_selector_img .select_img').click(function (e) { 
        e.preventDefault();

        let selectorImg = $(this).parents('.col-12').children('.img_select')
        let urlImg = $('img', this).attr('src');

       $('img', selectorImg).attr('src', urlImg);

       $('.select_img.img_active').removeClass('img_active');
        
       $(this).addClass('img_active');

       
    });

    /* Fav */
    $('.modal_pro_wishlist a, .product_wishlist a').click(function (e) { 
        e.preventDefault();
        $(this).toggleClass('fav');
    });

    /* Add cart */
    $('.to_cart').click(function (e) { 
        e.preventDefault();

        let val = $(this).attr('data-cart');
        var cntCart = $('.cart_quantity').html();

        // console.log(cntCart);

        if (val == 'modal') {
            let padreContenedor= $(this).parents('.quickview_body'),
            img = $(padreContenedor).find('.first_img').attr('src'),
            titleDesc = $(padreContenedor).find('.title').html(),
            valPrice = $(padreContenedor).find('.val_price').val(),
            qtyProd = parseInt($(padreContenedor).find('#qty').val());


            addCart(img, titleDesc, valPrice, cntCart, qtyProd);
            var magnificPopup = $.magnificPopup.instance;
            magnificPopup.close();

        }else if (val == 'page'){
            let padreContenedor= $(this).parents('.single-product-area'),
            img = $(padreContenedor).find('.normal_img').attr('src'),
            titleDesc = $(padreContenedor).find('.brand_name').html(),
            valPrice = $(padreContenedor).find('.val_price').val();

            addCart(img, titleDesc, valPrice, cntCart)
        }

        Command: toastr["success"]("Se agrego el producto al carrito")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "500",
            "timeOut": "900",
            "extendedTimeOut": "500",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

    });

    /* Remove Cart */
    $(document).on('click','.dropdown-product-remove',function (e) { 
        e.preventDefault();
        const articulo = $(this).parents('li'),
            ctnC = parseInt($('.cart_quantity').html()),
            subT = parseFloat($('.cart-pricing #subtotal').val()),
            comis = parseFloat($('.cart-pricing #comisiones').val()),
            valP = parseFloat($(articulo).find('.vprice').val()),
            catnP = parseInt($(articulo).find('.cant_product').html());

        $(articulo).fadeOut();

        if (ctnC == 1) {
            const listEmpty = '<span class="text-clean">El carrito esta vacío</span>';
            $('.cart-list').append(listEmpty).addClass('text-center').fadeIn();
        } 
            
        let subtotal = subT - (catnP * valP),
            comisiones = comis - ((catnP * valP) * .16),
            total = subtotal + comisiones;

        $('.cart_quantity').html(ctnC - catnP)


        $('.cart-pricing #subtotal').val(subtotal);
        $('.cart-pricing #comisiones').val(comisiones);
        $('.cart-pricing #total').val(total);
    
        $('.cart-pricing .cSub').html('USD$'+ subtotal.toFixed(2));
        $('.cart-pricing .cCom').html('USD$' + comisiones.toFixed(2));
        $('.cart-pricing .cTotal').html('USD$' + total.toFixed(2));

        setTimeout(() => {
            $(articulo).remove();
        }, 300);
    });

});



function toCartCantidad(boton, operacion) {
    const container = boton.parents('.qty_product');
    const numero = container.find('.toCartCantidad');
    let tipoAnim = 'normal';
    if (operacion == 'resta') {
        if (parseInt(numero.text()) == 1) return false;
        if (parseInt(numero.text() - 1) == 1) {
            boton.addClass('disabled');
        }
        tipoAnim = 'reverse';
        numero.text(parseInt(numero.text()) - 1);
    } else if (operacion == 'suma') {
        boton.siblings('.toCartBoton.disabled').removeClass('disabled');
        numero.text(parseInt(numero.text()) + 1);
    } else {
        console.log('El tipo de operacion (suma / resta) es obligatorio');
        return false;
    }
    numero.addClass(tipoAnim == 'reverse' ? 'animacion-reverse' : 'animacion');
    numero.one('animationend', function () {
        numero.removeClass(tipoAnim == 'reverse' ? 'animacion-reverse' : 'animacion');
    });
}

function addCart(img1, title, valPrice, qtyCart, qtyP = 1) {
    /* add li to cart */
    const articulo = `
    <li>
        <div class="cart-item-desc">
            <a href="#" class="image">
                <img src="${img1}" alt="${title}">
            </a>
            <div>
                <a href="#">${title.toUpperCase()}</a>
                <p><span class="cant_product">${qtyP}</span> x <span class="price">USD$${valPrice}</span></p>
                <input type="hidden" name="price" class="vprice" value="${valPrice}">
            </div>
        </div>
        <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
    </li>
    `

    $('.text-clean').remove();
    $('.cart-list').append(articulo).removeClass('text-center');

    /* calculate sub-total, total, iva */
    
    let valProducts = parseInt(qtyP) * parseFloat(valPrice),
        subtotal = parseFloat($('.cart-pricing #subtotal').val()) + valProducts,
        ivaProduct = .16 * valProducts,
        iva = parseFloat($('.cart-pricing #comisiones').val()) + ivaProduct,
        total = subtotal + iva;


        $('.cart-pricing #subtotal').val(subtotal);
        $('.cart-pricing #comisiones').val(iva);
        $('.cart-pricing #total').val(total);
    
        $('.cart-pricing .cSub').html('USD$'+subtotal.toFixed(2));
        $('.cart-pricing .cCom').html('USD$'+iva.toFixed(2));
        $('.cart-pricing .cTotal').html('USD$'+total.toFixed(2));

        $('.cart_quantity').html(parseInt(qtyCart) + qtyP)
}   