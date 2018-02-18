var form = document.getElementById("skills");
var skills = ["acro", "appraise", "artistry", "auto", "bluff", "climb", "craft", "dip", "dd", "disguise", "ea", "fly", "ha", "heal", "intim",
				"arcana", "dungeon", "engin", "geo", "history", "local", "martial", "nobility", "planes", "psi", 
				"rel", "lin", "lore", "perc", "perform", "prof", "ride", "sm", "soh", "sc", "stealth", "surv", "swim", "umd"];

form.addEventListener("change", function(){update();});

function update()
{
	for (var i = skills.length - 1; i >= 0; i--) {
		check(skills[i]);
	}
}

function check(skill)
{
	var total = 0;
	var classskill = checkbox(skill);
	var ability = document.getElementById(skill + "mod");
	var ranks = document.getElementById(skill + "ranks");
	var cls = document.getElementById(skill + "three");
	var racial = document.getElementById(skill + "race");
	var other = document.getElementById(skill + "other");
	var fields = [ability, ranks, racial, other];
	var values = [0, 0, 0, 0];

	for (var i = fields.length - 1; i >= 0; i--) {
		if (fields[i].value != "")
		{
			values[i] = fields[i].value;
			total = total + parseInt(values[i]);
		}
		values[i] = parseInt(values[i]);
	}
	if (classskill)
	{
		cls.value = 3;
		if(values[1].value != "0")
		{
			total = total + parseInt(cls.value);
		}
	}
	document.getElementById(skill + "total").value = total;

	// console.log(skill);
}

function checkbox(skill)
{
	return document.getElementById(skill + "check").checked;
}