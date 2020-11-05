/* Initialize jQuery Colorbox*/
jQuery(function( $ ){
 $('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').colorbox({
    transition:'none',
    rel: 'gallery',
    opacity:.85,

    title: function() {
    return $(this).find('img').attr('alt');
    }
    });
});
