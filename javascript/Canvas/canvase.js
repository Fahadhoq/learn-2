var c = document.getElementById("canvas");

var ctx = c.getContext("2d");

ctx.lineWidth =3;
ctx.strokeStyle = "black";
ctx.strokeRect(10,10,380,280);


ctx.fillStyle = "green";
ctx.fillRect(12,12,376,276);

var centerX = c.width /2;
var centerY = c.height /2;

ctx.beginPath();
ctx.arc(centerX,150,80,0,2*Math.PI,false);
ctx.fillStyle = "red";
ctx.fill();
ctx.strokeStyle = "black";
ctx.stroke();
