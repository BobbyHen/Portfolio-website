// Responsive Navigation
function responsiveNav() {
  const nav = document.querySelector("nav");

  if(nav.classList.contains("responsive") == false){
		nav.classList.add("responsive");
	}
	else{
		nav.classList.remove("responsive");
	} 
}

$(window).scroll(function(){
	// Sticky Navigation
	let vh = $(window).height();

	if($(this).scrollTop() > vh - 30){
		$('nav').addClass('nav-scrolled');
    $('nav a').addClass('nav-scrolled-a');
	}
	else {
		$('nav').removeClass('nav-scrolled');
    $('nav a').removeClass('nav-scrolled-a');
	}

	// Navigation Active State
	const scrollDistance = $(window).scrollTop();

	$('#home, #about, #projects, #contact').each(function(i) {
		if ($(this).position().top - 80 <= scrollDistance) {
			$('nav a.active').removeClass('active');
			$('nav a').eq(i).addClass('active');
			console.log("scrollDistance: " + scrollDistance);
			// console.log("Tab switched " + i);
		}
	});
});
