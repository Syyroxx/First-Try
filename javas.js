window.addEventListener("load", function () {

"use strict";

function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "300px";
    document.body.style.backgroundColor = "rgba(1,1,1,0.4)";
        }

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "rgb(44, 40, 40)";
        }

document.getElementById("send").onclick = function recup(){
	
	alert("Merci d\'avoir rempli le formulaire !");
}


});