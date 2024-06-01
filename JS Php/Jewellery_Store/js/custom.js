	/******** Back to top **********/
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
			} else {
			$('#back-top').fadeOut();
		}
	});
	jQuery('.backtotop').click(function(){
		jQuery('html, body').animate({scrollTop:0}, 'slow');
	});

/******** Color Option **********/

$(function(){
	
	$("#changer li a").click(function() { 
		$("link.theme").attr("href",$(this).attr('rel'));
		$.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
		return false;
	});
	
	$('.toggle').toggle(function() {
    
		$('.clbox').animate({
			left: '+=145'
			}, 458, 'swing', function() {    
		});
	
	}, function() {
	
		$('.clbox').animate({
			left: '-=145'
			}, 458, 'swing', function() {    
		});
	
	});
	
	$('.patterns a').live('click', function(e) {
		e.preventDefault();
		var pattern = $(this).attr('href');
		
		$(this).parents('ul').find('li').removeClass('active');
		$(this).parent().addClass('active');

		$('body').css('background-image', 'url(image/pattern/'+pattern+'.png)');
		$('body').css('background-repeat', 'repeat');
	});
	
	$('.patterns li:nth-child(5n+5)').css('margin-right', '0px');
});
	
	$("input[type='button'], input[type='submit'], a.button").wrap("<label class='btn'></label>");

	$('#cart > .heading').click(function(){
		$(this).next('div.content').slideToggle('fast');
	});	

	/******** Accordion **********/

	$('.accordion-heading, .checkout-heading').live('click', function() {
		$('.accordion-content, .checkout-content').slideUp('slow');
		$(this).parent().find('.accordion-content, .checkout-content').slideDown('slow');
	});

	/********Category Accordion **********/
	
	/******** Qty Plus Mines Button **********/

	$(".qtyBtn").click(function(){
		if($(this).hasClass("plus")){
			var qty = $("#qty").val();
			qty++;
			$("#qty").val(qty);
		}else{
			var qty = $("#qty").val();
			qty--;
			if(qty>0){
				$("#qty").val(qty);
			}
		}
	});	
		
	/******** Fancybox **********/
	
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
	$(".thumbnail").click(function() {
		$("a.thumbnail").removeClass("active");					   
		$(this).addClass("active");					   
	});	
	
	/******** Tabs **********/

	$('#tabs a').tabs();
	
	/******** Carouse **********/
	
	$('#carousel0 ul').jcarousel({
		vertical: false,
		visible: 5,
		scroll: 3
	});	
	
	/******** Cloud Zoom **********/
	
	$(".cloud-zoom-gallery").click(function (){
    	$('#zoom_image').attr('href',$(this).attr('href'));
	});
	
	$('.ab').hover(function(){
		$(this).prev('a').toggleClass('active');
	});    
	 
	$('#menu > .menuarrow').click(function(){
		$(this).next('ul').slideToggle('slow');
	})
		
	$('#footer .column h3').click(function () {
		$screensize = $(window).width();
		if ($screensize <= 768) {
			$(this).toggleClass("active");  
			$(this).parent().find("ul").slideToggle('medium');
		}  		
	});
		







