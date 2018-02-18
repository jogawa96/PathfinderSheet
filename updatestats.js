var str = document.getElementById("strscore");
var dex = document.getElementById("dexscore");
var con = document.getElementById("conscore");
var int = document.getElementById("intscore");
var wis = document.getElementById("wisscore");
var cha = document.getElementById("chascore");

var strscore = 0;
var dexscore = 0;
var conscore = 0;
var intscore = 0;
var wisscore = 0;
var chascore = 0;

str.addEventListener("change", function(){strscore = update("str");});
dex.addEventListener("change", function(){dexscore = update("dex");});
con.addEventListener("change", function(){conscore = update("con");});
int.addEventListener("change", function(){intscore = update("int");});
wis.addEventListener("change", function(){wisscore = update("wis");});
cha.addEventListener("change", function(){chascore = update("cha");});
str.addEventListener("load", function(){strscore = update("str");});
dex.addEventListener("load", function(){dexscore = update("dex");});
con.addEventListener("load", function(){conscore = update("con");});
int.addEventListener("load", function(){intscore = update("int");});
wis.addEventListener("load", function(){wisscore = update("wis");});
cha.addEventListener("load", function(){chascore = update("cha");});

function update(x)
{
	var scorefield = document.getElementById(x + "score");
	var modfield = document.getElementById(x + "mod");
	var sidefield = document.getElementById("side" + x);
	var score = scorefield.value;
	var mod = Math.floor((score - 10)/2);
	var sign = "";
	if(mod < 0)
		sign = "";
	if(mod > 0)
		sign = "+";
	var modifier = sign + mod;
	console.log(modifier);
	modfield.setAttribute("value", modifier);
	sidefield.setAttribute("value", score);
}