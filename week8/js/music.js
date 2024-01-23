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
			clair.volume = 0.6;
			clair.play();
			break;
		case "lust":
			req.loop = true;
			req.volume = 0.3;
			req.play();
			break;
		case "gluttony":
			glory.loop = true;
			glory.volume = 0.3;
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