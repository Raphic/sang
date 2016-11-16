$(document).ready(function(){
	var acc = document.getElementsByClassName("drop-show");
	var i;
	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function(e){
			if($('.drop-show.active').html() != $(this).html()) {
				$('.drop-show.active').next().removeClass('show');
				$('.drop-show.active').removeClass('active');
			}
			this.classList.toggle("active");
			//this.nextElementSibling.classList.toggle("show");
			e.stopPropagation();
	  }
	}
	$("html").on("click", function() {
		$('.drop-show.active').next().removeClass('show');
		$('.drop-show.active').removeClass('active');
	})
});