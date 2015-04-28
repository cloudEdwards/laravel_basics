// Make nav bar margin-top be negative the navbar height


var element = document.getElementById('navbar'),
    style = window.getComputedStyle(element),
    navH = style.getPropertyValue('height');

document.getElementById("navbar")
	.style.marginTop = -Math.abs(parseFloat(navH))+'px';
