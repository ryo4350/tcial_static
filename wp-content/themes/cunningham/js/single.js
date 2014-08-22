/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
	var nav = $('#nav');
	var home = $('#home-blog');
	var contact = $('.contact');
	var infobar = $('#infobar');
        var side = $('#article-side');
        var main = $('#article-main');
        var nav_offset = nav.offset();
        var main_offset = main.offset();
    $(window).scroll(function () {
    	if($(window).scrollTop() > nav_offset.top) {
    		nav.addClass('fixed');
                infobar.addClass('fixed');
    		home.stop().animate({'marginLeft' : '0px'}, 200);
    		contact.stop().animate({'top' : '6px'}, 200);
    		contact.addClass('fixed');
    	} else {
    		nav.removeClass('fixed');
    		home.stop().animate({'marginLeft' : '-60px'}, 200);
    		contact.removeClass('fixed');
    		contact.stop().animate({'top' : '24px'}, 200);
	}
   	if($(window).scrollTop() < main_offset.top - 50) {
                side.removeClass('fixed-article-side');
                side.removeClass('fixed-bottom-article-side');
        } else if($(window).scrollTop() > main_offset.top + main.height() - side.height()){ 
                side.removeClass('fixed-article-side');
                side.addClass('fixed-bottom-article-side');        
        } else {
                side.removeClass('fixed-bottom-article-side');
                side.addClass('fixed-article-side');        
        }        
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

    $(function(){
        $(".sub-menu").hide();
        $(".menu").mouseover(function(){
            $(".sub-menu").show();
        }).mouseout(function(){
            $(".sub-menu").hide();
        });
    });
});



