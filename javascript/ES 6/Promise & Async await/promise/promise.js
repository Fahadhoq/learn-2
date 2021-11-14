console.log("start");
//how to create a promise - (panding, resolve, reject)=>promise has 3 callback
//resolve = success , reject = error

//promise1
const promise1 = new Promise((resolve, reject)=> {
    
	let completedPromise = 1;
	
	if(completedPromise == 1){
          resolve('promise1 = completed promise');
	}else if(completedPromise != 1){
		reject('promise1 = rejected promise');
	}
});

//then = resolve = success, catch = reject = error
promise1.then((res) => {
	console.log(res);
}).catch((err) => {
   console.log(err);
});
//promise1 end

//promise2
const promise2 = new Promise((resolve, reject)=> {
    
	let completedPromise = 2;
	
	if(completedPromise == 1){
		resolve('promise2 = completed promise');
	}else if(completedPromise != 1){
		reject(new Error("promise2 = rejected promise"));
	}
});

//then = resolve = success, catch = reject = error
// promise2.then((res) => {
// 	console.log(res);
// }).catch((err) => {
//    console.log(err.message);
// });
//promise2 end

//call promisse all

// Promise.all([promise1, promise2]).then((res) => {
// 	console.log(res);
// }).catch((err) => {
// 	console.log(err.message);
// })

//message destrucer
Promise.all([promise1, promise2]).then(([res1 , res2]) => {
	console.log(res1, res2);
}).catch((err) => {
	console.log(err.message);
});
//message destrucer

//call promisse all

//race function
//many function run but show only which function is resolve first

const promise3 = new Promise((resolve, reject) => {
    setTimeout(() => {
         resolve("promise3");
	}, 2000);
});

const promise4 = new Promise((resolve, reject) => {
	setTimeout(() => {
		resolve("promise4");
	}, 1000);
});

Promise.race([promise3, promise4]).then((res) => {
	console.log(res);
});
//race function


//promise chaining

const taskOne = () => {
	return new Promise((resolve , reject) => {
		resolve("promise chaining : task one");
	});
}

const taskTwo = () => {
	return new Promise((resolve , reject) => {
		setTimeout(() => {
			resolve("promise chaining : task two");
		}, 3000);
	});
}

const taskThree = () => {
	return new Promise((resolve , reject) => {
		resolve("promise chaining : task three");
	});
}

const taskFour = () => {
	return new Promise((resolve , reject) => {
		reject("promise chaining : task four reject");
	});
}

const taskFive = () => {
	return new Promise((resolve , reject) => {
		resolve("promise chaining : task five");
	});
}

taskOne()
        .then((res) => console.log(res))
		.then(taskTwo) //wait for set time out
		.then((res) => console.log(res))
		.then(taskThree) //after complete taskTwo set time out then call taskThree
		.then((res) => console.log(res))
		.then(taskFour) // reject 
		.then((res) => console.log(res))
		.then(taskFive) // task four reject .so don't call task five
		.then((res) => console.log(res))
		.catch((err) => console.log(err)); // if any task is reject then catch it. and do not call next task

//promise chaining end

console.log("end");