//synchronous
const processOrder1 = (customer) => {
    console.log("processing order for customer 1");

    var currentTime = new Date().getTime();
    while (currentTime + 100 >= new Date().getTime()){
        console.log("cooking for customer 1");
    }

    console.log("order processed for customer 1");
}

console.log("take order for customer 1");
processOrder1();
console.log("completed order for customer 1");
//synchronous end

//Asynchronous
const processOrder2 = (customer) => {
    console.log("processing order for"+ `${customer}`);

    setTimeout(() => {
        console.log("cooking completed for customer 2");
    }, 5000);

    console.log("order processed for customer 2");
}

console.log("take order for customer 2");
processOrder2("customer 2");
console.log("completed order for customer 2");
//Asynchronous end