// WHY AIN'T IT WORKIN WHAT
var dateReplace = document.getElementById("date");

function time() {
var h = new Date().getHours();
h = ("0" + h).slice(-2);
var m = new Date().getMinutes();
m = ("0" + m).slice(-2);
var s = new Date().getSeconds();
s = ("0" + s).slice(-2);
var ms = (10000 + new Date().getMilliseconds()).toString().substr(1);
dateReplace.textContent = h + ":" + m + ":" + s + ":" + ms;
}
setInterval(time, 47);

const layers = ["Limbo", "Lust", "Gluttony", "Greed", "Wrath", "Heresy", "Violence", "Fraud", "Treachery"];