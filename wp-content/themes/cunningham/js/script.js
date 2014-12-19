/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    var nav = $('#nav.primary-nav');
    var home = $('#home');
    var secondary = $('#secondary-nav');
    offset = nav.offset();
    $(window).scroll(function () {
    	if($(window).scrollTop() > 68) {
            nav.addClass('fixed');
            home.stop().animate({'marginLeft' : '0px'}, 200);
            secondary.addClass('fixed-secondary');
    	} else {
            nav.removeClass('fixed');
            home.stop().animate({'marginLeft' : '-60px'}, 200);
            secondary.removeClass('fixed-secondary');
	}
    });
});

$(function() {
    var nav = $('#nav.magazine-nav');
    var home = $('#home-blog');
    var contact = $('.contact');
    var open = $('#menu-open');
    var category = $('#nav');
    offset = nav.offset();
    $(window).scroll(function () {
        if($(window).scrollTop() > offset.top - 78) {
            nav.addClass('fixed');
            home.stop().animate({'marginLeft' : '0px'}, 200);
            contact.stop().animate({'top' : '6px'}, 200);
            contact.addClass('fixed');
        } else {
            nav.removeClass('fixed');
            home.stop().animate({'marginLeft' : '-60px'}, 200);
            contact.removeClass('fixed');
            contact.stop().animate({'top' : '24px'}, 200);
        }
    });
    
    $(function(){
        open.click(function(){
            category.slideToggle(200);
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

    $(function(){
        $cat = $("#menu-category .sub-menu");
        $cat.hide();
        $("#menu-category").mouseover(function(){
            $cat.show();
        }).mouseout(function(){
            $cat.hide();
        });
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

$(function(){
        var $btn = $('#toPageTop a');
	var isHidden = true;

	// デフォルトは非表示
	$btn.hide();

	$(window).scroll(function () {
		if( $(this).scrollTop() > 300 ) {
			if( isHidden ) {
				$btn.stop(true,true).fadeIn();
				isHidden = false;
			}
		} else {
			if( !isHidden ) {
				$btn.stop(true,true).fadeOut();
				isHidden = true;
			}
		}
	});

	// クリックイベントの登録
	$btn.click(function(){
		// ページトップへスクロール
		$('html, body').animate({
				'scrollTop': 0
			}, 900);
		// デフォルトイベントのキャンセル
		return false;
	});
});
$(function() {
    $("#toggle").on("click", function() {
        $("#menu-primary").slideToggle();
    });
});





