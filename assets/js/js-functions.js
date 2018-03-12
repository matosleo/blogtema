//Menu toggle-button

$(document).ready(function(){
	$(".menu-icon").on("click", function(){
		$(".nav-menu ul").toggleClass("mostrar-menu");
	});
});

//Scrolling Effect

$(window).on("scroll", function(){
	if($(window).scrollTop() >= $('.header').height()) {
		$(".nav-menu").addClass("menu-fixed");
		$("header").css("margin-bottom", "112px");
		if($(window).width() > 768) {
			$(".nav-menu ul li a").css("color", "#fff");
		}
		
	}
	else {
		$(".nav-menu").removeClass("menu-fixed");
		$("header").css("margin-bottom", "40px");
		$(".nav-menu ul	 li a").css("color", "");
	}
}); 



