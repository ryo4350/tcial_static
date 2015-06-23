/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    var mini = $('.header--mini');
    $(window).scroll(function () {
    	if($(window).scrollTop() > 420) {
            mini.stop().animate({'top' : '0px'}, 300);
    	} else {
            mini.stop().animate({'top' : '-100px'}, 200);
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





