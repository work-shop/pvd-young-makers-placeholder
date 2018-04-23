'use strict';

const stride = 2;

function setLinkSizes() {
    var links = $('.module-link-list-link');
    var list = links.parents('.row').children('.link-sizing-reference');
    var height_factor = 1 / Math.ceil( (links.length / stride) );

    links.css({
        width: '50%',
        height: (list.outerHeight() - 10) * height_factor
    });
}

function sizeLinks() {
    $(document).ready( setLinkSizes );
    $(window).on('resize', setLinkSizes);
}

export { sizeLinks };
