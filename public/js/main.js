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
<<<<<<< HEAD

=======
    alert('i am Master');
    alert('fuck this is fucking hard');
    console.log('test branch is developing');
    console.log('dev branch is developing');
>>>>>>> dev
});
