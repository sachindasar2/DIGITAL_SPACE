var imagecount=0;
var imageArray = ["./images/1.jpg","./images/2.jpg","./images/3.jpg"];
var allimages=imageArray.length-1;
var banddiv=document.getElementById("band");
window.setInterval(function next(){
imagecount++;
if(imagecount>allimages){
imagecount=0;
}
banddiv.style.backgroundImage="url("+imageArray[imagecount]+")";
},3000);