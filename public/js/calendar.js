$(document).ready(function () {



    // show panel
    $('.date-block').dblclick(function (e) {
        $('#info-panel').addClass('open').css({
            top: e.pageY + 'px',
            left: e.pageX + 'px',
        });
    });

    $('#info-panel')
        .on('click', 'button', function (e) {

            if ($(this).is('create')) {

            }

            if ($(this).is('update')) {

            }

            if ($(this).is('cancel')) {
                $('#info-panel').removeClass('open')
            }

            if ($(this).is('delete')) {

            }
        })
        .on('click', '.close', function (e) {
            $('#info-panel').removeClass('open');
        });


});
