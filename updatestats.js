var str = document.getElementById("strscore");
var dex = document.getElementById("dexscore");
var con = document.getElementById("conscore");
var int = document.getElementById("intscore");
var wis = document.getElementById("wisscore");
var cha = document.getElementById("chascore");

str.addEventListener("change", function(){update("str");});
dex.addEventListener("change", function(){update("dex");});
con.addEventListener("change", function(){update("con");});
int.addEventListener("change", function(){update("int");});
wis.addEventListener("change", function(){update("wis");});
cha.addEventListener("change", function(){update("cha");});

function update(x)
{
	console.log(x);
	var scorefield = document.getElementById(x + "score");
	var modfield = document.getElementById(x + "mod");
	console.log(scorefield);
	var score = scorefield.value;
	console.log(score);
	var mod = Math.floor((score - 10)/2);
	var sign = "";
	if(mod < 0)
		sign = "";
	if(mod > 0)
		sign = "+";
	var modifier = sign + mod;
	console.log(modifier);
	modfield.setAttribute("value", modifier);
}