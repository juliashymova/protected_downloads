(function($) {
	$(document).ready(function(){
		$('.protected-downloads-toggler').click(function() {
			$(this).parent().find('form.webform-client-form').fadeToggle('fast'); 
		}).each(function() {
			$(this).parent().find('form.webform-client-form').hide();
		});
	});
})(jQuery);
