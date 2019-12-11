jQuery( document ).ready( function( $ ) {

    $( '.sub-menu' ).hide().addClass( 'slideUp' );

    $( '.menu-item-has-children' ).click( function( event ){

        event.preventDefault();
        $(this).find( '.sub-menu' ).toggleClass( 'show' );

    } );

    


} )