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
		if (x.matches) { // If media query matches
			document.getElementById("navbar").style.backgroundColor = "black";
		} else {
			
		}
	}
}

var x = window.matchMedia("(max-width: 991.98px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

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
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

$(document).ready(function(){
	$("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});