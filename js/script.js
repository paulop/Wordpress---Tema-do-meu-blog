$(function(){
	$(".dropdown-menu > li > a.trigger").on("click",function(e){
		var current=$(this).next();
		var grandparent=$(this).parent().parent();
		grandparent.find(".sub-menu:visible").not(current).hide();
		current.toggle();
		e.stopPropagation();
	});
	$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
		var root=$(this).closest('.dropdown');
		root.find('.sub-menu:visible').hide();
	});
	$('.ttip').tooltip({'placement':'left'});
	$('.ms_align').masonry({
	  itemSelector: '.col-md-6'
	});
});