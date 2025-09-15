/*
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright Apollotheme
 *  @description: ApPageBuilder is module help you can build content for your shop
 */
function initialization(){
	var leo_height_header;
	if ($(window).width() <= 991 && $(window).width() > 576) {
		leo_height_header = ($('#header .header-container').outerHeight()) +'px';
	}else{
		leo_height_header =  '0px';
	}
	$('#index #content-wrapper #main #content').fullpage({
		'verticalCentered': true,
		'css3': true,
		'responsiveWidth': 992,
		'navigation': true,
		'navigationPosition': 'right',
		'paddingTop': leo_height_header,
	})
}

$(document).ready(function(){
	initialization();
})

