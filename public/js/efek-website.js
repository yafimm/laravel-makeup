window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
		document.getElementById("logo").style.width = "50px";
		document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0.5)";
		document.getElementById("navbar").style.boxShadow = "0 -20px 5px 25px #333333";
	} else {
		document.getElementById("logo").style.width = "100px";
		document.getElementById("navbar").style.backgroundColor = "transparent";
		document.getElementById("navbar").style.boxShadow = "0 0 0 0";
	}
}

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
			.attr('src', e.target.result);
		};

		reader.readAsDataURL(input.files[0]);
	}
}
