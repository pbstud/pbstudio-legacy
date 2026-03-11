$(function () {
    if ($('.session-change').length === 0) {
        return;
    }

    let $items = $('.session-item');
    let $filters = $('[data-filter]');
    let $studioFilters = $('.studio-filter');

    function updateEmptyDays() {
        $('.change-week .day').each(function () {
            let $day = $(this);
            let hasVisible = $day.find('.session-item').not('.hide').length > 0;
            $day.toggleClass('hide', !hasVisible);
        });

        $('.change-week').each(function () {
            let $week = $(this);
            let hasVisible = $week.find('.day').not('.hide').length > 0;
            $week.toggleClass('hide', !hasVisible);
        });
    }

    function filterItems() {
        $items.addClass('hide');

        let studioVal = $studioFilters.filter('.active').data('value');
        $('[data-studio="' + studioVal + '"]').removeClass('hide');

        let selector = [];
        $filters.each(function (ind, el) {
            let $el = $(el);
            let filterVal = $el.val();

            if (!filterVal) {
                return;
            }

            selector.push('[data-' + $el.data('filter') + '="' + filterVal + '"]');
        });

        if (selector.length > 0) {
            selector.push('[data-studio="' + studioVal + '"]');
            selector = selector.join('');
            $items.addClass('hide');
            $items.filter(selector).removeClass('hide');
        }

        updateEmptyDays();
    }

    $studioFilters.on('click', function (e) {
        e.preventDefault();

        let $this = $(this);

        if ($this.hasClass('active')) {
            return;
        }

        $studioFilters.removeClass('active');
        $this.addClass('active');

        filterItems();
    });

    $filters.on('change', function () {
        filterItems();
    });

    $studioFilters.eq(0).trigger('click');
});
