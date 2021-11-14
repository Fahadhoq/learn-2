//Callback

// const dataLoading2 = () => {
// 	console.log("data one" +"<br>");
// }
const dataOne = () => {
	setTimeout( () => { //dataLoading2 function is called here
		console.log("data one" +"<br>"); 
	} , 1000);
}

console.log("callback" +"<br>");
dataOne(); // callback


//higher order function

console.log("higher order function" +"<br>");

function square(x){
	console.log(`square of ${x} : ${x * x}`)
}

square(5); // normal function call

const y = square;
y(5); // normal function

function HigherOredeFunction(num , callback){
       callback(num)
}

HigherOredeFunction(7 , square); //callback function


//implemantation

console.log("callback andb higher order function implemantation" +"<br>");

const LodeOne = (callback1) => {
	console.log("Load One" +"<br>");
	callback1();
}

const dataLoading1 = () => {
	console.log("Load two" +"<br>");
}
const LodeTwo = (callback2) => {
	setTimeout(dataLoading1 , 1000);
	callback2();
}

const dataLoading2 = () => {
	console.log("Load three" +"<br>");
}
const LodeThree = () => {
	setTimeout(dataLoading2 , 1000);
}

LodeOne(function f1(){
    LodeTwo(function f2() {
		LodeThree();
	});
}); 

// arrow function
LodeOne(() => {
    LodeTwo(() => {
		LodeThree();
	});
}); 