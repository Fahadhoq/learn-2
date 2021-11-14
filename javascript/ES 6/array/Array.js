// find (callback, value) return the value of the first element that pass certain condition 
// findIndex (callback, value) return the index of the first element that pass certain condition 



//find and findindex in array

//arrow method
var numbers1 = [10,20,30,40];
var findNumber1 = numbers1.find(x => x%2 ===0);
var findNumber5 = numbers1.findIndex(x => x%2 ===0);
document.write("find even number 1 : " +findNumber1+"<br/>");
document.write("find index number 1 : " +findNumber5+"<br/>");
//arrow method end

//callback function
var numbers2 = [11,20,30,40];

var findNumber2 = numbers2.find(function(x){
    if(x%2 == 0){
        return x;
    }
});
var findNumber6 = numbers2.findIndex(function(x){
    if(x%2 == 0){
        return x;
    }
});
document.write("find even number 2 : " +findNumber2+"<br/>");
document.write("find index number 2 : " +findNumber6+"<br/>");
//callback function end

//use function
let findNumber3 = (value, index , array) =>{
         if(value%2 == 0){
        return value;
    }
}

var numbers3 = [11,21,30,40];

var findNumber4 = numbers3.find(findNumber3);
var findNumber7 = numbers3.findIndex(findNumber3);

document.write("find even number 3 : " +findNumber4+"<br/>");
document.write("find index number 3 : " +findNumber7+"<br/>");
//use function end

//find and findindex in array end


//find and findindex in object 
var student = [
    {
        id : 101,
        name : "fahad",
        age : 26
    },
     {
        id : 102,
        name : "fahim",
        age : 20
    },
     {
        id : 103,
        name : "toma",
        age : 15
    },
]

var student_age1 = student.find(x => x.age > 20);
console.log(student_age1);

var student_age2 = student.findIndex(x => x.age > 20);
console.log(student_age2);


//find and findindex in object end


