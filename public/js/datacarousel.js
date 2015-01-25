(function($){

	$('#carouselA').owlCarousel({
		items:3,
		pagination: true,		
		lazyLoad:true,
		paginationNumbers: true,
		afterInit: function(elem){
			var that = this;
			that.owlControls.appendTo($('#paging-A'));
		}
	});
	
	$('#carouselB').owlCarousel({
		items:4,
		pagination: true,		
		lazyLoad:true,
		paginationNumbers: true,
		rewindNav: false, //tidak loop sehabis next tidak ulang dr awal, tdk seperti di atas
		afterInit: function(elem){
			var that = this;
			that.owlControls.appendTo($('#paging-B'));
		}
	});

	$('#carouselC').owlCarousel({
		items:6,
		pagination: true,		
		lazyLoad:true,
		paginationNumbers: true,
		rewindNav: false, //tidak loop sehabis next tidak ulang dr awal, tdk seperti di atas
		afterInit: function(elem){
			var that = this;
			that.owlControls.appendTo($('#paging-C'));
		}
	});

	/*
	var owl = $(".carousel");

	owl.owlCarousel({});

	$(".next").click(function(){
	    owl.trigger('owl.next');
	})
	$(".prev").click(function(){
	    owl.trigger('owl.prev');
	})
	*/

})(jQuery);