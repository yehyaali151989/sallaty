$(document).ready(function () {
    $(".dropdown-language .dropdown-menu .dropdown-item.en").on('click', function (e) {
        event.preventDefault();
        window.location.pathname = 'en/admin/login';
    });

    $(".dropdown-language .dropdown-menu .dropdown-item.ar").on('click', function (e) {
        event.preventDefault();
        window.location.pathname = 'ar/admin/login';
    });

    // full screen 
    $(".nav-link-expand").on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('full-screen');
        if ($(this).hasClass('full-screen')) {
            openFullscreen();
        } else {
            closeFullscreen()
        }
    });

});

var elem = document.documentElement;

/* View in fullscreen */
function openFullscreen() {
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) {
        /* Firefox */
        elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
        /* Chrome, Safari and Opera */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
        /* IE/Edge */
        elem.msRequestFullscreen();
    }
}

/* Close fullscreen */
function closeFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.mozCancelFullScreen) {
        /* Firefox */
        document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
        /* Chrome, Safari and Opera */
        document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
        /* IE/Edge */
        document.msExitFullscreen();
    }
}

// end full screen 
