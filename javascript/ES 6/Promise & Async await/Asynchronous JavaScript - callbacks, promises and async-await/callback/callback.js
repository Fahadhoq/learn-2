const takeOrder = (customer , callback) => {
    console.log("Take order for " + `${customer}`);
    
    callback(customer);
}

const processOrderForTea = (customer , callback) => {
    setTimeout(() => {
        console.log("cooked Tea for " + `${customer}`);
        console.log("Process order for " + `${customer}`);

        callback(customer);
    }, 5000);  
    
}

const processOrderForCoffee = (customer , callback) => {
    setTimeout(() => {
        console.log("cooked Coffee for " + `${customer}`);
        console.log("Process order for " + `${customer}`);

        callback(customer);
    }, 3000);  
    
}

const serveOrder = (customer) => {
    console.log("Serve order for " + `${customer}`);        
}


//main
takeOrder("customer FAHAD", (customer1) =>{
    processOrderForTea(customer1 , (customerOne) =>{
           serveOrder(customerOne);
    });
});

takeOrder("customer FAHIM", (customer1) =>{
    processOrderForCoffee(customer1 , (customerOne) =>{
           serveOrder(customerOne);
    });
});


