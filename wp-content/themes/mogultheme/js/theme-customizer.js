/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {


	// Collect information from customize-controls.js about which panels are opening.
	wp.customize.bind( 'preview-ready', function() {

		// Initially hide the theme option placeholders on load
		$( '.panel-placeholder' ).hide();

		wp.customize.preview.bind( 'section-highlight', function( data ) {

			// Only on the front page.
			if ( ! $( 'body' ).hasClass( 'front-page' ) ) {
				return;
			}

			// When the section is expanded, show and scroll to the content placeholders, exposing the edit links.
			if ( true === data.expanded ) {
				$( 'body' ).addClass( 'highlight-front-sections' );
				$( '.panel-placeholder' ).slideDown( 200, function() {
					$.scrollTo( $( '#panel1' ), {
						duration: 600,
						offset: { 'top': -70 } // Account for sticky menu.
					});
				});

			// If we've left the panel, hide the placeholders and scroll back to the top.
			} else {
				$( 'body' ).removeClass( 'highlight-front-sections' );
				// Don't change scroll when leaving - it's likely to have unintended consequences.
				$( '.panel-placeholder' ).slideUp( 200 );
			}
		});
	});

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		});
	});
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		});
	});


/*	// Page layouts.
	wp.customize( 'page_layout', function( value ) {
		value.bind( function( to ) {
			if ( 'one-column' === to ) {
				$( 'body' ).addClass( 'page-one-column' ).removeClass( 'page-two-column' );
			} else {
				$( 'body' ).removeClass( 'page-one-column' ).addClass( 'page-two-column' );
			}
		} );
	} );
*/
	// Whether a header image is available.
	function hasHeaderImage() {
		var image = wp.customize( 'header_image' )();
		return '' !== image && 'remove-header' !== image;
	}


	// Toggle a body class if a custom header exists.
	$.each( [ 'header_image' ], function( index, settingId ) {
		wp.customize( settingId, function( setting ) {
			setting.bind(function() {
				if ( hasHeaderImage() ) {
					$( document.body ).addClass( 'has-header-image' );
				} else {
					$( document.body ).removeClass( 'has-header-image' );
				}

			} );
		} );
	} );

} )( jQuery );
