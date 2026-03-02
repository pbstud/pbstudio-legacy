import Cookies from 'js-cookie';

const ModalFlash = {
    container: '.remodal > .pop_box',

    show: function (type, msg) {
        $(this.container)
            .prepend('<div class="alert ' + type + '"><p>' + msg + '</p></div>')
        ;
    },

    reset: function () {
        $(this.container).find('.alert').remove();
    },

    success: function (msg) {
        this.show('success', msg);
    },

    error: function (msg) {
        this.show('error', msg);
    },
};

const ModalLoading = {
    container: null,

    elmReplace: null,

    template: null,

    show: function () {
        $(this.elmReplace).after(this.template);
        this.container.addClass('loader');
    },

    remove: function () {
        this.container.removeClass('loader');
        this.container.find('.processing').remove();
    },

    showElement: function ($el) {
        $el.after(this.template);
    },
};

global.ModalFlash = ModalFlash;
global.ModalLoading = ModalLoading;

$(function () {
    global.remodal = $('[data-remodal-id="modal"]');

    ModalLoading.container = remodal;
    ModalLoading.elmReplace = '.btn-submit';
    ModalLoading.template = $('#modal-loading').html();

    const instRemodal = remodal.remodal();
    const remodalOriginalClasses = remodal.prop('class');

    $(document).on('closed', '.remodal', function (e) {
        $(this).empty();
        $(this).prop('class', remodalOriginalClasses);
    });

    const $body = $('body');

    $body.on('click', '[data-remodal]', function (e) {
        e.preventDefault();

        let url = $(this).data('url');
        let extraClass = $(this).data('remodal');

        if (extraClass) {
            remodal.addClass(extraClass);
        }

        remodal
            .load(url, function (response, status, xhr) {
                if (403 === xhr.status) {
                    remodal.html(response);
                }

                if ('closed' === instRemodal.getState()) {
                    instRemodal.open();
                }
            })
        ;
    });

    /**
     * Form Ajax: Todos los formularios que se muestran en una ventana modal
     * deben tener la clase .m-fjx
     */
    $body.on('submit', '.m-fjx', function (event) {
        event.preventDefault();

        let $form = $(this);

        $form.find('button').prop('disabled', true);

        ModalFlash.reset();
        ModalLoading.show();

        $.ajax({
            url: $form.attr('action'),
            type: $form.prop('method'),
            data: $form.serialize(),
            success: function (response) {
                if (response.targetUrl) {
                    location = response.targetUrl;
                } else if (response.error) {
                    ModalFlash.error(response.error);
                    ModalLoading.remove();
                } else {
                    remodal.html(response);
                    ModalLoading.remove();
                }
            },
            error: function (data) {
                alert('error');
            },
        });
    });

    var menu = $('#day-content');
    var contenedor = $('.calendar');

    if (contenedor.length) {
        var contenedor_offset = contenedor.offset();
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > contenedor_offset.top) {
                menu.addClass('day-fix');
            } else {
                menu.removeClass('day-fix');
            }
        });
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() >= 15) {
            $('header').addClass('fix');
        } else {
            $('header').removeClass('fix');
        }
    });

    $('header .nav-toggle').on('click', function (event) {
        $('.nav-collapse').slideToggle();
        $('header .nav-toggle').toggleClass('close');
    });

    /////////////////////////////////////////////
    const $contact = $('#contact');

    if ($contact.length) {
        $contact.validate({
            rules: {
                field: {
                    required: true,
                    email: true
                }
            },
            submitHandler: function (form) {
                var data = $(form).serialize();
                var url = $(form).attr('action');
                var container = $(form).parent();
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    crossDomain: false
                }).success(function (data) {
                    $(container).slideToggle('fast', function () {
                        $(container).html(data.HTML);
                        $(container).slideToggle('fast');
                    });

                });
            }
        });
    }
    /////////////////////////////////////////////
    const $branchMenu = $('#select-branch-menu');

    $('.reserve-class-toggle').on('click', (event) => {
        event.preventDefault();
        $branchMenu.slideToggle();
    });

    /////////////////////////////////////////////
    const $modalNotice = $('[data-remodal-id=modal-notice]');

    if ($modalNotice.length && !Cookies.get('notice-closed')) {
        const remodalNotice = $modalNotice.remodal();

        setTimeout(function () {
            remodalNotice.open();
        }, 1000)

        $(document).on('closed', '.remodal-notice', function () {
            Cookies.set('notice-closed', true, { expires: 1 });
        });
    }
    /////////////////////////////////////////////
    $('.waiting-list-remove').on('click', function (e) {
        if (!confirm('¿Confirmas que deseas borrar lista de espera?')) {
            e.preventDefault();

            return;
        }

        return true;
    })
});
