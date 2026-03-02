const conektaSuccessResponseHandler = function (token) {
    let form = $("#checkout-form");
    let data = {
        'conekta_card_token': token.id,
        'coupon': $('#coupon-validated').val()
    };

    $.post(form.prop('action'), data, function (data) {
        if (data.error) {
            ModalFlash.error(data.error);

            form.find('button').prop('disabled', false);

            ModalLoading.remove();
        } else {
            location.href = data.redirect;
        }
    });
};

const conektaErrorResponseHandler = function (response) {
    let form = $("#checkout-form");

    ModalFlash.error(response.message_to_purchaser);

    form.find('button').prop('disabled', false);
    ModalLoading.remove();
};

function checkoutHandler(conektaPublicKey)
{
    $.getScript('https://cdn.conekta.io/js/latest/conekta.js')
        .done(function () {
            Conekta.setPublicKey(conektaPublicKey);
            Conekta.setLanguage('es');

            $('#checkout-form').submit(function (e) {
                let form = $(this);

                ModalFlash.reset();
                ModalLoading.show();

                form.find('button').prop('disabled', true);
                Conekta.Token.create(form.get(0), conektaSuccessResponseHandler, conektaErrorResponseHandler);

                return false;
            });
        })
    ;

    const $frmCoupon = $('#frm-coupon');
    const $couponValid = $('#coupon-valid');
    const $couponField = $('#coupon-field');
    const $btnCoupon = $('#btn-coupon');
    const $couponValidated = $('#coupon-validated');
    const URL_COUPON_VALIDATE = $btnCoupon.data('url');

    $btnCoupon.on('click', function () {
        let couponCode = $.trim($couponField.val());

        if (couponCode) {
            ModalFlash.reset();
            $btnCoupon.hide();
            ModalLoading.showElement($btnCoupon);
            $frmCoupon.find('.processing').show();

            $.getJSON(URL_COUPON_VALIDATE, {coupon: couponCode}, function (response) {
                if (response.success) {
                    $.each(response.data, function (key, value) {
                        $(`#coupon-${key}`).text(value);
                    });

                    $couponValidated.val(couponCode);

                    $frmCoupon.hide();
                    $couponValid.show();
                } else {
                    $frmCoupon.find('.processing').remove();
                    $btnCoupon.show();
                    $frmCoupon.show();
                    ModalFlash.error(response.error);
                }
            });
        }
    });
}

// Solo se llama cuando se muestra por ajax.
function checkoutNotLogged()
{
    $('.load-modal').on('click', function (e) {
        e.preventDefault();

        let url = $(this).data('url');

        $(this).closest('.right-container').load(url);
    });

    $('#frmCheckoutLogin').on('submit', function () {
        let form = $(this);

        form.find('button').prop('disabled', true);

        ModalFlash.reset();
        ModalLoading.show();

        $.ajax({
            url: form.prop('action'),
            type: form.prop('method'),
            data: form.serialize(),
            success: function (response) {
                if (response.targetUrl) {
                    remodal.load(response.targetUrl, function () {
                        ModalLoading.remove();
                    });
                } else if (response.error) {
                    ModalFlash.error(response.error);

                    form.find('button').prop('disabled', false);
                    ModalLoading.remove();
                }
            },
            error: function (data) {
                alert('error');
            },
        });

        return false;
    });

    $('#frmCheckoutRegister').on('submit', function () {
        let form = $(this);

        form.find('button').prop('disabled', true);

        ModalFlash.reset();
        ModalLoading.show();

        $.ajax({
            url: form.prop('action'),
            type: form.prop('method'),
            data: form.serialize(),
            success: function (response) {
                if (response.targetUrl) {
                    remodal.load(response.targetUrl, function () {
                        ModalLoading.remove();
                    });
                } else if (response.error) {
                    ModalFlash.error(response.error);

                    form.find('button').prop('disabled', false);
                    ModalLoading.remove();
                } else {
                    form.closest('.right-container').html(response);
                    ModalLoading.remove();
                }
            },
            error: function (data) {
                alert('error');
            },
        });

        return false;
    });

    $('#frmCheckoutResetting').on('submit', function () {
        let form = $(this);

        form.find('button').prop('disabled', true);

        ModalFlash.reset();
        ModalLoading.show();

        $.ajax({
            url: form.prop('action'),
            type: form.prop('method'),
            data: form.serialize(),
            success: function (response) {
                if (response.targetUrl) {
                    form.closest('.right-container').load(response.targetUrl, function () {
                        ModalLoading.remove();
                    });
                } else if (response.error) {
                    ModalFlash.error(response.error);

                    form.find('button').prop('disabled', false);
                    ModalLoading.remove();
                } else {
                    form.closest('.right-container').html(response);
                    ModalLoading.remove();
                }
            },
            error: function (data) {
                alert('error');
            },
        });

        return false;
    });
}

global.checkoutHandler = checkoutHandler;
global.checkoutNotLogged = checkoutNotLogged;
