// Responsive Navigation
function responsiveNav() {
  let navChange = document.getElementById("menu");

  if (navChange.className === "nav") {
    navChange.className += " responsive";
  }
  else {
    navChange.className = "nav";
  }
}


$(window).scroll(function(){
	// Sticky Navigation
	if($(this).scrollTop() > 1150){
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
			if ($(this).position().top-80 <= scrollDistance) {
					$('nav a.active').removeClass('active');
					$('nav a').eq(i).addClass('active');
			}
	});
})
