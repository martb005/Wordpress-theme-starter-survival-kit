/*
 * @author Martin Bussières
 * @copyright Martin Bussières
 */

jQuery(function($) {

	// Add Class to HTML tag if lte IE 10
	if ($.browser.msie){
		$('html').addClass('ie').addClass('ie'+parseInt($.browser.version,10));
	}
	// SVG to PNG
	$(function() {
		svgeezy.init();
	});

});

$(function() {
	// Contact form
	$('#form-contact').submit(function() { // Replace usual .PHP form action by javascript to decrease SPAM
		$(this).attr('action','sendmail.php');
	});

	// Transform placeholder to value for old browsers.
	if (!Modernizr.input.placeholder){
		$('input[placeholder],textarea[placeholder]').each(function() {
			$(this).data('placeholder',$(this).attr('placeholder'));
			$(this).focus(function() {
				if ($(this).val()==$(this).data('placeholder'))  $(this).val('');
			}).blur(function() { 
				if ($(this).val()=='')  $(this).val($(this).data('placeholder'));
			}).blur();
		});
	};
});