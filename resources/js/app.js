import './bootstrap.js';
import.meta.glob([
    '../images/**',
    '../js/backend/**',
    '../js/frontend/**'
]);
(function($) {
    /** contact form hide fake placeholder starts**/
    $(".input-placeholder input, .input-placeholder textarea").focus(function() {
        $(this).closest('.input-placeholder').find('.placeholder').hide();
    }).focusout(function() {
        if($(this).val().length) {
            $(this).closest('.input-placeholder').find('.placeholder').hide();
        }else{
            $(this).closest('.input-placeholder').find('.placeholder').show();
        }
    });
    $(".input-placeholder select").change(function() {
        if($(this).val().length) {
            $(this).closest('.input-placeholder').find('.placeholder').hide();
        } else {
            $(this).closest('.input-placeholder').find('.placeholder').show();
        }
    });
    /** contact form hide fake placeholder ends**/

    // Sticky header
    window.addEventListener('scroll', function() {
        let scrollPosition = window.scrollY;
        scrollPosition >= 30 ? document.body.classList.add('nav-fixed') : document.body.classList.remove('nav-fixed')
    });
})( $ );
