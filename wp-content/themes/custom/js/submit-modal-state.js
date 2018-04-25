'use strict';

function submitModalState( config ) {
    $( document ).ready( function( ) {

        console.log( 'submit-modal-state.js loaded.');


        if ( window.location.href.indexOf( config.selector ) !== -1 ) {
            $( config.modal_selector ).removeClass('off').addClass('on');
            $('body').removeClass('modal-off').addClass('modal-on');

        }

    });
}

export { submitModalState };
