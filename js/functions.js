/*ovdje se nalaze funcije za javascript/jquery*/

$(document).ready(function() {

    $('#toggle').click(function(){
	    $(this).toggleClass('open');
		$('.right-header').slideToggle(300);
	});


});

function openNav() {
    document.getElementById("navigation").style.width = "300px";
}

function closeNav() {
    document.getElementById("navigation").style.width = "0";
}





