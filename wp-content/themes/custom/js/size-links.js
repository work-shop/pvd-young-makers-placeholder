'use strict';

const breakpt = 1000;

function setLibraryLinkSizes() {
    const stride = 2;

    var links = $('.module-library-link');
    var list = links.parents('.row').children('.link-sizing-reference');
    var height_factor = 1 / Math.ceil( (links.length / stride) );

    links.css({
        width: '50%',
        height: (list.outerHeight() - 10) * height_factor
    });
}

function setMakerspaceLinkSizes() {
    const stride = 2;

    var links = $('.module-makerspace-link');
    var container = links.parent();
    var list = links.parents('.row').children('.link-sizing-reference');


    var height_factor = 1 / Math.ceil( (links.length / ((( window.innerWidth < breakpt ) ? 0.5 : 1) * stride) ) );

    const height = (list.outerHeight() - 10) * height_factor;

    container.css({
        width: 2 * (height + 5)
    });

    links.css({
        width: height,
        height: height
    });
}

function sizeLinks() {
    $(document).ready( setLibraryLinkSizes );
    $(window).on('resize', setLibraryLinkSizes);

    $(document).ready( setMakerspaceLinkSizes );
    $(window).on('resize', setMakerspaceLinkSizes);
}

export { sizeLinks };
