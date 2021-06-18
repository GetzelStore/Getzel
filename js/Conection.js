$("#login").on("submit", function(e) {
    e.preventDefault();
    if ($("#UserName").val() != "" && $("#Password").val() != "") {
        $("#LoginUser").val("true");
    }
    const DatosLogin = $(this).serializeArray();
    // console.log(DatosLogin);
    $.ajax({
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        data: DatosLogin,
        dataType: "json",
        success: function(response) {
            console.log(response);
            if (response.respuesta == "Ok") {
                let contenedorForm = $('.login100-form')
                let alerta = `<div class="welcome pullUp">
                                <i class="spinner"></i>
                                <span>Validando Información</span>
                              </div>`

                $(contenedorForm).append(alerta);

                setTimeout(() => {
                    $('.welcome').addClass('ok');
                    $('.NameUser').html(response.nameuser);
                    $('.welcome span').html('¡Bienvenido de Vuelta!');
                    setTimeout(() => {
                        closeModal();
                    }), 2000;
                }, 2500);
            }
        }
    });
})

function closeModal() {
    var section = $('.cd-section.modal-is-visible');
    section.removeClass('modal-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
        animateLayer(section.find('.cd-modal-bg'), 1, false);
    });
    //if browser doesn't support transitions...
    if (section.parents('.no-csstransitions').length > 0) animateLayer(section.find('.cd-modal-bg'), 1, false);
}

function animateLayer(layer, scaleVal, bool) {
    layer.velocity({ scale: scaleVal }, 400, function() {
        $('body').toggleClass('overflow-hidden', bool);
        (bool) ?
        layer.parents('.cd-section').addClass('modal-is-visible').end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend'): layer.removeClass('is-visible').removeAttr('style').siblings('[data-type="modal-trigger"]').removeClass('to-circle');
    });
}