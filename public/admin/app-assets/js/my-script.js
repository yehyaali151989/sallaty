$(document).ready(function () 
{
    $(".dropdown-language .dropdown-menu .dropdown-item.en").on('click', function (e) {
        event.preventDefault();
        window.location.pathname = 'en/admin/login';
    });

    $(".dropdown-language .dropdown-menu .dropdown-item.ar").on('click', function (e) {
        event.preventDefault();
        window.location.pathname = 'ar/admin/login';
    });
});