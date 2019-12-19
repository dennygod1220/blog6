$(document).ready(function() {
    $('.navbar-nav [data-toggle="tooltip"]').tooltip();
    $('.navbar-truffle-toggle').on('click', function(event) {
        event.preventDefault();
        $('.navbar-truffle').toggleClass('open');
    });

    $('.nav-style-toggle').on('click', function(event) {
        event.preventDefault();
        var $current = $('.nav-style-toggle.disabled');
        $(this).addClass('disabled');
        $current.removeClass('disabled');
        $('.navbar-truffle').removeClass('navbar-'+$current.data('type'));
        $('.navbar-truffle').addClass('navbar-'+$(this).data('type'));
    });
    alert('i am Master');
});
