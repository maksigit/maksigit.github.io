$('.tab').on('click', function (e) {
    e.preventDefault();
    var activeTabId = $(this).attr('href');

    $('.tab').removeClass('active');
    $(this).addClass('active');

    $('.tab-content').removeClass('active');
    $(activeTabId).addClass('active');

} )
