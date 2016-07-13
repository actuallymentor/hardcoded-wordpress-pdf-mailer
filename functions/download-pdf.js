$( document ).on( 'ready', function(  ) {
	$( '#header' ).css( 'display', 'none' )
	console.log ( 'PDF timer triggered' ) 
	setTimeout(function(){
		console.log ( 'printing pdf' ); 
		$(location).attr('href', '//pdfcrowd.com/url_to_pdf/?height=-1');
	},3000)
} )