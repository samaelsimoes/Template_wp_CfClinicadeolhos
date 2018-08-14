//menu responsivo
$(function() {
	$('#nav-menu').on('change', function() {
		if(this.value!="") {
			window.location = (this.value);
		}
	});

	$("option.current_page_item").attr("selected","selected");
});

