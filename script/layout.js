var layout=document.getElementById("layoutmain");
var layoutli=document.getElementById("layoutli");
layout.style.display="none";

function showlayout(){
	layout.style.display="block";
}

layoutli.onclick=showlayout;

