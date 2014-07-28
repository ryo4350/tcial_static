/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
	var nav = $('#nav.primary-nav');
	var home = $('#home');
	var contact = $('.contact');
	var secondary = $('#secondary-nav');
    offset = nav.offset();
    $(window).scroll(function () {
    	if($(window).scrollTop() > 4) {
    		nav.addClass('fixed');
    		home.stop().animate({'marginLeft' : '0px'}, 200);
//    		contact.stop().animate({'top' : '10px'}, 200);
//    		contact.addClass('fixed');
    		secondary.addClass('fixed-secondary');
    	} else {
    		nav.removeClass('fixed');
    		home.stop().animate({'marginLeft' : '-60px'}, 200);
//    		contact.removeClass('fixed');
//    		contact.stop().animate({'top' : '10px'}, 200);
    		secondary.removeClass('fixed-secondary');
		}
    });
});
$(function(){
    $("a[href^=#]").click(function(){
        var Hash = $(this.hash);
        var HashOffset = $(Hash).offset().top - 100;
        $("html,body").animate({
            scrollTop: HashOffset
        }, 1000);
            return false;
    });
});




