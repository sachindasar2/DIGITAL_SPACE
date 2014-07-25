var signup=document.getElementById("signupdiv");
var login=document.getElementById("signupdiv2");
var elem=document.getElementById("title");
var join=document.getElementById("title2");
signup.style.display="none";
login.style.display="inline-block";
elem.innerHTML="JOIN NOW ";
title2.innerHTML="LOGIN AS A USER"

function sign(){
	login.style.display="none";
	signup.style.display="inline-block";
	title2.innerHTML="REGISTER AS NEW USER"
}
elem.onclick=sign;

