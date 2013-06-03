$('i#search').click(function(){
	$('input#keyword').focus();
});

// // Submit function
// $("input#keyword").on("keyup", function(e) {
// 	 /* stop form from submitting normally */
//   	event.preventDefault();
// 	// Set Timeout
// 	clearTimeout($.data(this, 'timer'));

// 	// Set Search string
// 	var search_str = $(this).val();

// 	if (search_str == '') {
// 		// Do nothing
// 		$("ul#results").fadeOut();
// 		$("h6#results-text").fadeOut();
// 	} else{
// 		$("ul#results").fadeIn();
// 		$("h6#results-text").fadeIn();
// 		$(this).data('timer', setTimeout(search, 100));
// 	};	
// });

// // On search submit and get results
// function search() {
// 	// Set query string
// 	var query_value = $('input#keyword').val();
// 	$('b#search-string').html(query_value);
// 	if (query_value !== '') {
// 		$.ajax({
// 			type: "POST",
// 			url: "HTTP://jeffco.dev/search",  // Need to change to our specific url
// 			data: { query: query_value },
// 			cache: false,
// 			success: function(html){
// 				$("ul#results").html(html);
// 			}
// 		});
// 	}return false;
// }