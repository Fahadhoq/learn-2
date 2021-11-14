//one condition
var number = Number(prompt("enter a number"));

var result = number>0 ? "positive" : "negative";

document.write(result);

// many condition
var num = Number(prompt("enter a num"));

var result = num == 5 ? "number is 5" : num>0 ? "positive" : num<0 ? "negative"  : "error";

document.write(result);