/**
 * 
 * Autocomplete custom jQuery plug-in
 * 
 * this file relies on jQuery and jQuery UI .js file:
 * http://code.jquery.com/jquery-latest.min.js
 * http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.js
 *
 */

/**
 * Sets up autocomplete functionality on input element
 */

(function( $ ){
	function log( message ) {
		$( "<div>" ).text( message ).prependTo( "#log" );
		$( "#log" ).scrollTop( 0 );
	}
	$.fn.extend({
		openAutocomplete: function() {
			console.log('open');
			$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			// var defaults = {
			// 	something: 23,
			// 	otherThing: 'hello'
			// };
			// console.log('yeahhhh yeahhh');
			// // options = $.extend(defaults, options);
			// //
			// // console.log(options.something);
			// // console.log(options.otherThing);
		},
		closeAutocomplete: function() {
			console.log('close');
			$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
		},
		buildAutocomplete: function(ul, item){
			console.log('build');
			return $( "<li>" ).append( "<a>" + item.airportName + "<br>" + item.cityName + "</a>" ).appendTo( ul );
		},
		logAutocomplete: function(event, ui){
			log( ui.item ?
				"Airport Name: " + ui.item.airportName + "  |  City Name: " + ui.item.cityName:
				"Nothing selected, input was " + this.value);

		}
	});
})( jQuery );
