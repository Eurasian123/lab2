var buttonsfx = new Audio("../ost/INSERT DISC.mp3");
var fire = new Audio("../ost/The Fire Is Gone.mp3");
fire.loop = true;
fire.volume = 0.6;
document.getElementById("btn1").addEventListener("click", insertDisc);
var ld = document.getElementById("ld");

function lseq3() {
	fire.play();
	document.getElementById("cover").style.display = "none";
}

function lseq2() {
	ld.style.display = "none";
	setTimeout(lseq3, 1000);
}

function lseq1() {
	ld.style.display = "block";
	setTimeout(lseq2, 4000);
}

function insertDisc() {
	buttonsfx.play();
	btn1.style.display = "none";
	document.getElementById("byp").style.display = "none";
	setTimeout(lseq1, 6000);
}

/* I hope this worthless comment will fix this one bug! */