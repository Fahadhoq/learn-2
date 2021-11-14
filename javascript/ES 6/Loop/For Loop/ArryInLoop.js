
var num2 = new Array();
var n = parseInt(prompt("enter how many number you need : "));
for(i=0; i<n; i++){
     num2 [i] = parseInt(prompt("enter a num : "))
}

var sum = 0;
document.write("numbers are : ");

var max = num2[0];
var min = num2[0];

for(var x = 0; x<n; x++){
    document.write(num2[x]+ " ");
    sum = sum + num2[x];

 if(max<num2[x]){
       max = num2[x];
       
 }
 if(min>num2[x]){
     min = num2[x];
 }
}

var avg = parseFloat(sum/n);

//samll to big
var sort = num2.sort(function(a,b){
    return a-b;

});

//Big to small number
var ReversSort = num2.sort(function(a,b){
    return b-a;

});

document.write("sum :"+sum + " <br/>");
document.write("sort :"+sort + " <br/>");
document.write("Revers Sort :"+ReversSort + " <br/>");
document.write("avg :"+avg + " <br/>");
document.write("max :"+ max + " <br/>");
document.write("min :"+ min + " <br/>");


