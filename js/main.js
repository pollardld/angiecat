// Navigation Change Function
function navChange() {
  if ( jQuery(window).width() < 1112 ) {
  	
  	if ( !jQuery( 'header' ).hasClass( 'both-nav' ) ) {
	    jQuery( '.mainnav' ).appendTo( '.links' );
	    jQuery( 'header' ).addClass( 'both-nav' );
	}

  } else {
    
    jQuery( '.mainnav' ).appendTo( 'header' );

    if ( jQuery( 'header' ).hasClass( 'both-nav' ) ) {
      jQuery( 'header' ).removeClass( 'both-nav' ); 
    }
  
  }
}

// See if screen is initally less then 1112
navChange();

// add/remove navicon if user resizes
jQuery(window).resize( navChange );

// Check it user is on Safari
var isSafari = /constructor/i.test(window.HTMLElement);

function safari () {
  if ( isSafari ) {
    jQuery( 'header' ).addClass( 'is-safari' );
  }
}

safari();