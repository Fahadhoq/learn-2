// if use await then must be use async at the first of the function

console.log("start")

//normal function

const taskOne = () => {
	return new Promise((resolve , reject) => {
		resolve("async await : task one");
	});
}

const taskTwo = () => {
	return new Promise((resolve , reject) => {
		setTimeout(() => {
			resolve("async await : task two");
		}, 3000);
	});
}

const taskThree = () => {
	return new Promise((resolve , reject) => {
		resolve("async await : task three");
	});
}

const taskFour = () => {
	return new Promise((resolve , reject) => {
		reject("async await : task four reject");
	});
}

const taskFive = () => {
	return new Promise((resolve , reject) => {
		resolve("async await : task five");
	});
}

async function callAllTask(){
	try {
		const t1 = await taskOne();
		console.log(t1);
		const t2 = await taskTwo();
		//const t2 = await taskTwo(t1); //can pass data if already call the function 
		console.log(t2);
		const t3 = await taskThree();
		console.log(t3);
		const t4 = await taskFour(); //reject. so don't call task five. end console error
		console.log(t4);
		const t5 = await taskFive();
		console.log(t5);
	} catch (err) {
        console.log(err); // to find reject function
	}
	
}

callAllTask();
	
//normal function end

console.log("end");