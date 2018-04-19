'use strict';

const stride = 2;

function sizeLinks() {
    $(document).ready( function() {
        var links = $('.module-link-list-link');

        console.log( links );
        var list = links.parents('.row');

        var height_factor = 1/5;

        console.log( list.borders );

        links.css({
            width: '50%',
            height: (list.height() - 10) * height_factor
        })

    });
}

export { sizeLinks };
