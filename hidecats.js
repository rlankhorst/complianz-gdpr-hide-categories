jQuery(document).ready(function ($) {
    'use strict';

    $(document).on("cmplzCookieWarningLoaded", cmplz_autohide);
    function cmplz_autohide() {

        console.log(cmplz_hidecats);
        $('.cc-window label').hide();
        $('.cc-message').append('<div class="cc-show-settings-wrapper"><a href="#" class="cc-link cc-show-settings">'+cmplz_hidecats.settings+'</a></div>');
    }

    $(document).on('click' ,'.cc-show-settings',function(e){
        e.preventDefault();
        if ($('.cc-window label').is(':hidden')){
            $('.cc-window label').slideDown();
        } else {
            $('.cc-window label').slideUp();
        }

    })


});