//forEach

var cities = ["feni" , "ctg" , "dhaka"];

//normal away
cities.forEach(city);
function city(CITY){
	document.write("normal function: "+CITY+"<br/>");
}

//callback funtion
cities.forEach(function(city){
	document.write("callback function: "+city+"<br/>");
})


var numbers = [10,20,30,40];
var newArry = [];
numbers.forEach(function(x,index,arr){
       console.log(x);
       newArry.push(x*x);
       arr[index] = x+5;
              
})

document.write(newArry+"<br/>");
document.write("push: "+numbers+"<br/>");

//map

var number = [10,20,30,24,10];

var NewNum = number.map(function(x){
    return x*x;
})

document.write("map: "+NewNum+"<br/>");

//filter

var num = [20,10,30,65,61,3,12];

var New = num.filter(function(x){
    return x > 10;
})

document.write("filter : "+New+"<br/>");