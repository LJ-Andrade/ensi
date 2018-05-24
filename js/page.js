// ------- PRE-LOADER ------- //

$(document).ready(function($) {
    $('.preloader').fadeOut();
});


// ------ ONE SCROLL INIT ------- //
$(document).ready(function() {
    $('#fullpage').fullpage({
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
        menu: '.nav',
        slidesNavigation: true,
        scrollOverflow: true,
        scrollOverflowReset: true,
        // scrollOverflowResetKey: 'YWx2YXJvdHJpZ28uY29tXzlRaGMyTnliMnhzVDNabGNtWnNiM2RTWlhObGRBPT14Ykk='
    });
});