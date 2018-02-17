
var armour = document.getElementById("acarmour");
var shield = document.getElementById("acshield");
var dex = document.getElementById("acdex");
var size = document.getElementById("acsize");
var natural = document.getElementById("acnatural");
var deflection = document.getElementById("acdeflection");
var dodge = document.getElementById("acdodge");
var other = document.getElementById("acother");

armour.addEventListener("change", function(){update();});
shield.addEventListener("change", function(){update();});
dex.addEventListener("change", function(){update();});
size.addEventListener("change", function(){update();});
natural.addEventListener("change", function(){update();});
deflection.addEventListener("change", function(){update();});
dodge.addEventListener("change", function(){update();});
other.addEventListener("change", function(){update();});

function update()
{
	var acfield = document.getElementById("ac");
	var total = 10;

	var bonuses = [armour, shield, dex, size, natural, deflection, dodge, other];
	var values = [0, 0, 0, 0, 0, 0, 0, 0];

	for (var i = bonuses.length - 1; i >= 0; i--) {
		if(bonuses[i].value != "")
		{
			values[i] = bonuses[i].value;
			total = total + parseInt(values[i]);
		}
		values[i] = parseInt(values[i]);
	}
	acfield.value = total;
	var touch = document.getElementById("actouch").value = 10 + values[2] + values[3] + values[5] + values[6] + values[7];
	var ff = document.getElementById("acflat").value = 10 + values[0] + values[1] + values[3] + values[4] + values[5] + values[7];
}