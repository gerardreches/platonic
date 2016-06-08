$(function() {

	// Header dropdowns functionality
    $('.header-dropdown').click(function () {
    	$(this).find('ul').stop().slideToggle();
    }).mouseenter(function(){
    	$(this).find('ul:hidden').stop().slideDown();
    }).mouseleave(function(){
		$(this).find('ul:visible').stop().slideUp();
    });


});