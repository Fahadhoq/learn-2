//normal function
function massage1(){
	return "massage1";
}
function AddNumber(x,y){
	return x+y;
}

var massage1 = massage1();
var sum = AddNumber(4,5);

document.write("normal function : "+ massage1 + "<br/>");
document.write("normal function : "+ sum + "<br/>");
//normal function end


//arrow function
document.write("********** arrow function **********" + "<br/>");

//without parameter
let massage2 = () => {
    return "massage2";
}

let massage3 = () => "massage3";

document.write("without parameter : "+ massage2() + "<br/>");
document.write("without parameter with essay output : "+ massage3() + "<br/>");
//without parameter end

//one parameter
let massage4 = x => document.write("one parameter : "+ x + "<br/>"); 
massage4("fahad");

let AddNumber1 = x => 5+x;
var sum1 = AddNumber1(10);
document.write("one parameter : "+ sum1 + "<br/>");
//one parameter end

//two and more parameter
let AddNumber2 = (x,y) => x+y;
var sum2 = AddNumber2(5,6);
document.write("more parameter : "+ sum2 + "<br/>");
//two and more parameter end


//map and filter
document.write("********** map and filter **********" + "<br/>");


//array of object
var student2 = [
	{
        id   : 101,
        name : "fahad",
        age  : 20
	},
	{
        id   : 102,
        name : "fahim",
        age  : 15
	},
	{
        id   : 103,
        name : "toma",
        age  : 10
	} 
]          
//array of object end

//normal function
function student_id1(){
	// return student2.filter(function(x){
    //        return x.id >101;
	// });
	return student2.filter(function(x){
        return x.id >101;
	}).map(function(y){
		return y.name;
	})
}
displayArrayObjects(student_id1());

//arrow function
let student_id2 = () => student2.filter((x) => x.id > 101).map((y) => y.name);
displayArrayObjects(student_id2());

function displayArrayObjects(arrayObjects) {
        var len = arrayObjects.length;
        var text = "";

        for (var i = 0; i < len; i++) {
            var myObject = arrayObjects[i];
            
            // for (var x in myObject) {
            //     text += ( x + ": " + myObject[x] + ", ");
            // }
            text += (myObject + "<br/>");
        }

        document.write("  "+ text + "<br/>");
    }

//map and filter end



// arrow function end