(function($) {
    'use strict';
    $( document ).ready(function() {
        $('.wopb-flip-image').parent().addClass('wopb-flip-image-section')
        $(".wopb-flip-image").hover(function(){
            $(this).css("background", "white");
        }, function () {
            $(this).css("background", "");
        });
    });

})( jQuery );