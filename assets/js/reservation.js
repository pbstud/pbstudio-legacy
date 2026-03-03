function filterSessions() {
    const calendar = $('#calendar');

    let filterType = calendar.find('[data-event-filter="type"]').val();
    let filterDiscipline = calendar.find('[data-event-filter="discipline"]').val();
    let filterInstructor = calendar.find('[data-event-filter="instructor"]').val();

    calendar.find('[data-event]').each(function (ind, elm) {
        $(elm).removeClass('hide');
    });

    if (filterType + filterDiscipline + filterInstructor) {
        calendar.find('[data-event]').each(function (ind, elm) {
            $(elm).addClass('hide');
        });

        let selector = [];

        if (filterType) {
            selector.push('[data-event-type="' + filterType + '"]');
        }

        if (filterDiscipline) {
            selector.push('[data-event-discipline="' + filterDiscipline + '"]');
        }

        if (filterInstructor) {
            selector.push('[data-event-instructor="' + filterInstructor + '"]');
        }

        selector = selector.join('');
        calendar.find(selector).each(function (ind, elm) {
            $(elm).removeClass('hide');
        });
    }
}

function calendarInit()
{
    const calendar = $('#calendar');

    calendar.on('click', '#lwprev, #lwnext', function (e) {
        e.preventDefault();

        var data = {
            url: $(this).prop('href'),
            title: $(this).prop('title')
        };

        $.ajax({
            url : data.url,
            beforeSend: function () {
                window.document.title = data.title;
                window.history.pushState(data, data.title, data.url);
            },
            success: function (response) {
                $('#calendar-container').html(response);

                filterSessions();
            }
        });
    });

    calendar.find('.filters [data-event-filter]').on('change', function () {
        filterSessions();
    })
}

function reservationInit()
{
    const placeContainer = $('#place_container');
    const btnConfirm = $('.btn-confirm');
    const btnWaitingList = $('.btn-waitinglist');

    placeContainer.find('a.place').on('click', function (e) {
        placeContainer.find('a.place').removeClass('active');
        $(this).addClass('active');
    });

    btnConfirm.on('click', function (event) {
        event.preventDefault();

        let placeNumber = placeContainer.find('a.place.active').data('place');

        if (undefined == placeNumber) {
            ModalFlash.error('¡Debes seleccionar un lugar!');
        }

        $('[name="place_number"]').val(placeNumber);
        $('#frmReservation').submit();
    });

    btnWaitingList.on('click', function () {
        $('#frmWaitingList').submit();
    });

    placeContainer.find('a.place:first-child').click();
}

function reservationCancelInit()
{
    $('#btn-reservation-cancel').on('click', function (e) {
        e.preventDefault();

        let button = $(this);

        if (button.hasClass('btn-disabled')) {
            return;
        }

        button.addClass('btn-disabled');
        ModalLoading.show();

        let url = button.data('url');
        let csrfToken = $('#frmReservationCancel input[name="_token"]').val();

        $.ajax({
            url : url,
            type: 'post',
            data: {
                _token: csrfToken
            },
            success: function (response) {
                if (response.error) {
                    ModalFlash.error(response.error);

                    button.removeClass('btn-disabled');
                } else {
                    $('.pop_box').replaceWith(response);
                }

                ModalLoading.remove();
            }
        });
    });
}

global.reservationInit = reservationInit;
global.reservationCancelInit = reservationCancelInit;

$(function () {
    calendarInit();
    reservationInit();
    reservationCancelInit();
});
