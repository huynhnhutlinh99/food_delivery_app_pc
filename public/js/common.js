$(document).ready(function () {
    $('#menu a').on('click', function (e) {
        $('.nl-item').removeClass('active');
        $(this).parent().addClass('active');
        let tab = e.currentTarget.parentElement.id;
        $(".nl-ctn-part").removeClass('active');
        $(".nl-ctn-part." + tab).addClass('active');
        return false;
    });
    var flag = $('#tab2').hasClass('active');
    if (flag == true) {
        $('#ctn1').addClass('active');
    }
});
