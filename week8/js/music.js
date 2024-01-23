var clair = new Audio("ost/Clair De Lune.mp3");
var req = new Audio("ost/Requiem.mp3");
var glory = new Audio("ost/Glory.mp3");
var dune = new Audio("ost/Dune Eternal.mp3");
var deep = new Audio("ost/Deep Blue.mp3");
// var tba = new Audio("ost/Requiem.mp3");
// var red = new Audio("ost/Requiem.mp3");

function musicLoad(layer) {
	switch(layer) {
		case "limbo":
			clair.loop = true;
			clair.play();
			break;
		case "lust":
			req.loop = true;
			req.play();
			req.volume = 0.2;
			break;
		case "gluttony":
			glory.loop = true;
			glory.play();
			break;
		case "greed":
			dune.loop = true;
			dune.play();
			break;
		case "wrath":
			deep.loop = true;
			deep.play();
	}
}