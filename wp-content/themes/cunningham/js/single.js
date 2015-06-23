/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
        var side = $('#article__side');
        var main = $('#article__main');
        var main_offset = main.offset();
    $(window).scroll(function () {
   	if($(window).scrollTop() < main_offset.top - 50) {
                side.removeClass('article__side--fixed');
                side.removeClass('article__side--fixed--bottom');
        } else if($(window).scrollTop() > main_offset.top + main.height() - side.height()){ 
                side.removeClass('article__side--fixed');
                side.addClass('article__side--fixed--bottom');        
        } else {
                side.removeClass('article__side--fixed--bottom');
                side.addClass('article__side--fixed');        
        }        
    });
});



