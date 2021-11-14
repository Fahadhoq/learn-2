var win = 0;
var fail = 0;

for(var x=1; x<=5; x++){
var a = parseInt(prompt("enter 1 to 5 any number"));
 
var b = Math.floor((Math.random()*5) + 1);


if(a == b)
{
    document.write("random number is :"+ b + "<br/>");
    document.write("gussing number is :"+ a + "<br/>");
    document.write("you win  <br/>");
     win++;
}

else
{  
    document.write("random number is :"+ b + "<br/>");
    document.write("gussing number is :"+ a + "<br/>");
    document.write("you fail  <br/>");
   fail++;
}
}

document.write("how many time you fail :" + fail +  "<br/>");
document.write("how many time you win :" + win +  "<br/>");