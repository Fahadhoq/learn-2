//Synchoronous

const taskOne = () => {
	document.write("task One" +"<br>");
} 
const taskTwo = () => {
	document.write("task two" +"<br>");
}
const taskThree = () => {
	document.write("task three" +"<br>");
}
const taskFour = () => {
	document.write("task four" +"<br>");
}

document.write("Synchoronous call 1st" +"<br>");
taskOne();
taskTwo();
taskThree();
taskFour();
document.write("Synchoronous call 2nd" +"<br>");
taskOne();
taskThree();
taskFour();
taskTwo();

//Asynchoronous

const dataOne = () => {
	console.log("data One" +"<br>");
}

const dataLoading1 = () => {
	console.log("data two" +"<br>");
}
const dataTwo = () => {
	setTimeout(dataLoading1 , 5000);
}

const dataLoading2 = () => {
	console.log("data three" +"<br>");
}
const dataThree = () => {
	setTimeout(dataLoading2 , 0);
}

const dataLoading3 = () => {
	console.log("data four" +"<br>");
}
const dataFour = () => {
	setTimeout(dataLoading3 , 2000);
}

const dataFive = () => {
	console.log("data five" +"<br>");
}
const datasix = () => {
	console.log("data six" +"<br>");
}


console.log("Asynchoronous call" +"<br>");
dataOne(); // 1st call 1st laod
dataTwo(); // called 2nd but load after 5s
dataThree(); // called 3nd but load after 0s / 4th load
dataFour(); // called 4th but load after 2s
dataFive(); // 5th call 2nd load
datasix(); // 6th call 3rd load