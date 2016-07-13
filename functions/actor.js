$( document ).on( 'ready', function(  ) {
	console.log( 'Hcrm DOM ready' )
	$( '#hcrmform' ).on( 'click', '#hcrmsubmit', function( event ) {
		event.preventDefault(  )
		console.log( 'Hcrm click' )
		let subscribe = {
			'email': $( '#hcrmemail' ).val(  ),
			'list': 'lupC23UqZGvSWXHlVakRmQ',
			'Remindme': 'true',
			'sj': $( 'h1#subtitle' ).text(  ).trim(  ),
			'url': window.location.href,
			'checker': $( '#hcrmchecker' ).val(  )
		}
		console.log( subscribe )
		$( '#hcrmform' ).html( '<div class="progress"><div class="indeterminate"></div></div><p>Sending you the PDf, just a sec...</p>' )
		$.post( '/wp-content/plugins/hcrm/functions/sgactor.php',subscribe ,function( response ) {
			console.log( 'Sg init' )
			$.post( 'https://www.skillcollector.com/sendy/subscribe',subscribe ,function( response ) {
				console.log( 'Subs' )
				$( '#hcrmform' ).html( '<p>All went ok, if you receive nothing check your spambox. Enjoy!</p>' )

			} )
		} )
	} )
} )