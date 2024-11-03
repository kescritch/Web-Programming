/*
This file is the javascript code for part C of project 2. 
*/
timer = setInterval(changeBackground,3000);
document.getElementById("run").addEventListener("mouseover",randomLocation);

function changeBackground()
{
    var red = Math.random() * 255;
    var green = Math.random() * 255;
    var blue = Math.random()* 255;

    document.body.style.backgroundColor = 'rgb(' + red + ',' + green + ',' + blue + ')';
}

function randomLocation()
{
    var x = Math.random()*100;
    var y = Math.random()*100;
    document.getElementById("move").style.transform = "translate(" + x + "%,"+ y + "%)";
}
