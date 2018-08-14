$( document ).ready(function() {
	$("#menu-button").click(function(){
		if($(this).hasClass("closed")) {

			$("#nav").removeClass("menu-closed");
			$(this).removeClass("closed");
		} else {

			$("#nav").addClass("menu-closed");

			$(this).addClass("closed");
		}
	});
});