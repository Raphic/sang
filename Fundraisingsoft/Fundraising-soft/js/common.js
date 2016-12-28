﻿
function OpenpopupLogin(id) {
    div = $("#divlogin").html();
    TINY.box.show({
        html: div, fixed: false, maskid: 'bluemask', maskopacity: 40, closejs: function () {
        }, openjs: function () {
        }
    });
}


$('.right02a').on('click', '.togglecon, .toggletxt', function () {

    var el = $(this);

    if (!el.hasClass('togglecon')) {
        el = el.prev();
    }

    if (el.hasClass('selected')) {
        el.toggleClass('selected', 250, 'linear');
        $(el.data('target') || el.next()).html(el.next().data('label_off') || _t('Off'));

        var input = el.find('input');

        if (input.attr('type') == 'checkbox') {
            input.prop('checked', false);
        }
        else {
            input.val('0');
        }
    } else {
        el.toggleClass('selected', 250, 'linear');
        $(el.data('target') || el.next()).html(el.next().data('label_on') || _t('On (recommended)'));

        var input = el.find('input');

        if (input.attr('type') == 'checkbox') {
            input.prop('checked', true);
        }
        else {
            input.val('1');
        }
    }
});

