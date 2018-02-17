
var armour = document.getElementById("acarmour");
var shield = document.getElementById("acshield");
var dex = document.getElementById("acdex");
var size = document.getElementById("acsize");
var natural = document.getElementById("acnatural");
var deflection = document.getElementById("acdeflection");
var other = document.getElementById("acother");

armour.addEventListener("change", function(){update();});
shield.addEventListener("change", function(){update();});
dex.addEventListener("change", function(){update();});
size.addEventListener("change", function(){update();});
natural.addEventListener("change", function(){update();});
deflection.addEventListener("change", function(){update();});
other.addEventListener("change", function(){update();});

function update()
{
	var acfield = document.getElementById("ac");
	var total = 10;

	var bonuses = [armour, shield, dex, size, natural, deflection, other];
	var values = [0, 0, 0, 0, 0, 0, 0];

	for (var i = bonuses.length - 1; i >= 0; i--) {
		if(bonuses[i].value != "")
		{
			values[i] = bonuses[i].value;
			total = total + parseInt(values[i]);
		}
	}
	document.getElementById("ac").value = (total);
}