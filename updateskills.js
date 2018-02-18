document.getElementByTagName("html").addEventListener("load", function(){checkSkills();});

checkSkills()
{
	var skills = document.querySelectorAll("input[type=text]");
	console.log(skills.length);

	for (var i = skills.length - 1; i >= 0; i--) {
		skills[i].addEventListener("change", function(){console.log("blah")});
	}
}

