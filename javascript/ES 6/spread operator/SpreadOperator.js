//Spread Operator

function AddNumber(x , y , z){
	return x+y+z;
}
let numbers = [1,2,3];
document.write(AddNumber(...numbers) + "<br/>");

//normal concat array
let numbers1 = [4,5,6];
let number1 = numbers.concat(numbers1);
document.write(number1 + "<br/>");

//spread operation concat
let number2 = [...numbers , ... numbers1];
document.write(number2 + "<br/>");

// spread parameter use any potion
let numbers2 = [4,5,6, ...numbers]; 
document.write(numbers2 + "<br/>");
let numbers3 = [...numbers ,4,5,6]; 
document.write(numbers3 + "<br/>");
let numbers4 = [4,...numbers,5,6]; 
document.write(numbers4 + "<br/>");

//object concat
let p1 = {
	name : 'fahad',
	age : 26
}
let p2 = {
	school : 'pilot',
	town : 'feni'
}

let p = {...p1 , ...p2};
console.log(p);

//Spread Operator end