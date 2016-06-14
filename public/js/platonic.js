$(function() {

	// Header dropdowns functionality
    $('.header-dropdown').click(function () {
    	$(this).find('ul').stop().slideToggle();
    }).mouseenter(function(){
    	$(this).find('ul:hidden').stop().slideDown();
    }).mouseleave(function(){
		$(this).find('ul:visible').stop().slideUp();
    });

    // Tabs functionality
    $('.tabbed-container').each(function(){
    	var tabs = $(this).find('nav ul li');
    	tabs.removeClass('active');
    	tabs.eq(0).addClass('active');
    	var sections = $(this).find('section');
    	sections.removeClass('active');
    	sections.eq(0).addClass('active');
		tabs.click(function() {
    		tabs.removeClass('active');
    		$(this).addClass('active');
    		sections.removeClass('active');
    		sections.eq(tabs.index(this)).addClass('active');
    	});
    });


});