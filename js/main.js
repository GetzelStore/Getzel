$(function() {
    "use strict"; // Start of use strict

    const $window = $(window);

    /* Minificacion logo */
    $window.scroll(function() {
        var scroll = $window.scrollTop();
        if (scroll >= 100) {
            $('.logo-container img').removeClass('logo')
        } else {
            $('.logo-container img').addClass('logo')
        }
    });


    /* Smoot Scroll */

    $('.jsScroll').on("click", function() {
        const href = $(this).attr("href");
        let navbar = $('.navbar').innerHeight(); //mide la altura de un elemento html
        let navig = $('#navbarResponsive').innerHeight();

        let rPx = navbar - navig


        $("html, body").animate({
            scrollTop: $(href).offset().top - rPx
        }, 1500);
    });

    $('.preDef').click(function(e) {
        e.preventDefault();
    });


    /* Activar Animaciones */

    window.addEventListener('scroll', function() {
        let pantalla = window.innerHeight / 4.5;

        let estadio = document.querySelector('#estadio');
        let posicionEstadio = estadio.getBoundingClientRect().top;

        let ambiental = document.querySelector('#ambiental');
        let posicionAmbiental = ambiental.getBoundingClientRect().top;

        let tiendas = document.querySelector('#tiendas');
        let posicionTiendas = tiendas.getBoundingClientRect().top;

        let audio = document.querySelector('#audio');
        let posicionAudio = audio.getBoundingClientRect().top;

        let conferencias = document.querySelector('#conferencias');
        let posicionConferencias = conferencias.getBoundingClientRect().top;

        let auditorios = document.querySelector('#auditorios');
        let posicionAuditorios = auditorios.getBoundingClientRect().top;

        let recintos = document.querySelector('#recintos');
        let posicionRecintos = recintos.getBoundingClientRect().top;

        let casinos = document.querySelector('#casinos');
        let posicionCasinos = casinos.getBoundingClientRect().top;

        let antros = document.querySelector('#antros');
        let posicionAntros = antros.getBoundingClientRect().top;

        let contacto = document.querySelector('#contacto');
        let posicionContacto = contacto.getBoundingClientRect().top;

        let footer = document.querySelector('#footerPage');
        let posicionFooter = footer.getBoundingClientRect().top;


        if (window.innerWidth >= 992) {
            if (posicionEstadio < pantalla) {
                estadio.querySelector('.container-fluid').classList.remove('d-md-none')
                estadio.querySelector('.container-fluid').classList.add('animatefadeInUp')
            }

            if (posicionAmbiental < pantalla) {
                ambiental.querySelector('.container-fluid').classList.remove('d-md-none')
                ambiental.querySelector('.container-fluid').classList.add('animatefadeInRight')
            }

            if (posicionTiendas < pantalla) {
                tiendas.querySelector('.container-fluid').classList.remove('d-md-none')
                tiendas.querySelector('.container-fluid').classList.add('animatefadeInLeft')
            }

            if (posicionAudio < pantalla) {
                audio.querySelector('.container-fluid').classList.remove('d-md-none')
                audio.querySelector('.container-fluid').classList.add('animatefadeInRight')
            }

            if (posicionConferencias < pantalla) {
                conferencias.querySelector('.container-fluid').classList.remove('d-md-none')
                conferencias.querySelector('.container-fluid').classList.add('animatefadeInLeft')
            }

            if (posicionAuditorios < pantalla) {
                auditorios.querySelector('.container-fluid').classList.remove('d-md-none')
                auditorios.querySelector('.container-fluid').classList.add('animatefadeInRight')
            }

            if (posicionRecintos < pantalla) {
                recintos.querySelector('.container-fluid').classList.remove('d-md-none')
                recintos.querySelector('.container-fluid').classList.add('animatefadeInLeft')
            }

            if (posicionCasinos < pantalla) {
                casinos.querySelector('.container-fluid').classList.remove('d-md-none')
                casinos.querySelector('.container-fluid').classList.add('animatefadeInRight')
            }

            if (posicionAntros < pantalla) {
                antros.querySelector('.container-fluid').classList.remove('d-md-none')
                antros.querySelector('.container-fluid').classList.add('animatefadeInUp')
            }
            // } else {
            //     if (posicionEstadio < pantalla) {
            //         estadio.querySelector('.container-fluid').classList.remove('d-none')
            //         estadio.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }

            //     if (posicionAmbiental < pantalla) {
            //         ambiental.querySelector('.container-fluid').classList.remove('d-none')
            //         ambiental.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }

            //     if (posicionTiendas < pantalla) {
            //         tiendas.querySelector('.container-fluid').classList.remove('d-none')
            //         tiendas.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }

            //     if (posicionAudio < pantalla) {
            //         audio.querySelector('.container-fluid').classList.remove('d-none')
            //         audio.querySelector('.container-fluid').classList.add('animatefadeInt')
            //     }

            //     if (posicionConferencias < pantalla) {
            //         conferencias.querySelector('.container-fluid').classList.remove('d-none')
            //         conferencias.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }

            //     if (posicionAuditorios < pantalla) {
            //         auditorios.querySelector('.container-fluid').classList.remove('d-none')
            //         auditorios.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }

            //     if (posicionRecintos < pantalla) {
            //         recintos.querySelector('.container-fluid').classList.remove('d-none')
            //         recintos.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }

            //     if (posicionCasinos < pantalla) {
            //         casinos.querySelector('.container-fluid').classList.remove('d-none')
            //         casinos.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }

            //     if (posicionAntros < pantalla) {
            //         antros.querySelector('.container-fluid').classList.remove('d-none')
            //         antros.querySelector('.container-fluid').classList.add('animatefadeIn')
            //     }
        }

    })


    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).on('scroll', navbarCollapse);

});