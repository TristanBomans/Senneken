$(document).ready(function(){
	$("#profileEditButton" ).click(function() {
		$("input").prop('disabled', false);
    	$("#authorityInput").fadeOut( "slow");
    	$("#submitButton").show();
    	$("#profileEditButton").hide();
	});
});




