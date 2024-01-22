var buttonsfx = new Audio("ost/INSERT DISC.mp3");
var fire = new Audio("ost/The Fire Is Gone.mp3");
document.getElementById("btn1").addEventListener("click", insertDisc);

function thirdFunctionGdi() {
	
}

function loadScreen() {
	document.getElementById("ld").style.display = "block";
}

function insertDisc() {
	buttonsfx.play();
	btn1.style.display = "none";
	setTimeout(loadScreen, 6000);
}