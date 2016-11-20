$( document ).ready( function() {
	menuHandler();
});

function menuHandler() {
	var button = $( '.ham-button' );
	var menu = $( '.main-navigation' );

	button.click( function() {
		menu.slideToggle( 400, function() {
			$( this ).toggleClass( 'reveal' ).css( 'display', '' );
		});
	});
}