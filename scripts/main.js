var i = 0;
var txt = 'Get movies here...';
var speed = 50;
function typeWriter(){
    if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}