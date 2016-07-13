$( document ).on( 'ready', function(  ) {
	$( '#header', '#comments' ).css( 'display', 'none' )
	let images = $('img', '#article')
	for (i=0;i<images.length;i++){
		let element = $(images[i])
		if  ( $ ( element ).attr ( 'src' ).length < 1   ) {
			console.log ( 'Lazyload triggered' ) 
			$ ( element ).attr ( 'src', $ ( element ).attr ( 'lazy' )   )
			$ ( element ).attr ( 'srcset', $ ( element ).attr ( 'lazyset' )   )
			$ ( element ).attr ( 'lazy', '' ) 
			$ ( element ).attr ( 'lazysrc', '' ) 
		}
	}
	console.log ( 'PDF timer triggered' ) 
	setTimeout(function(){
		console.log ( 'printing pdf' ); 
		$(location).attr('href', '//pdfcrowd.com/url_to_pdf/?height=-1');
	},3000)
} )