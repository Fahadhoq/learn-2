//ES6

//let and const

let y=5;
for (y=0; y<5 ; y++){
    document.write(y+"<br/>");
   
//let
    let x = 5;
    document.write(x+"<br/>");
    // var x = 0 ; //not allow
    // let x =0 ; //not allow
    // const x = 0 ; //not allow
    // document.write(x+"<br/>");

//const
    const z = 5 ; //must be assing when const declear
    document.write(z+"<br/>");
     // var z = 0 ; //not allow
    // let z =0 ; //not allow
    // const z = 0 ; //not allow
    // document.write(z+"<br/>");
}
document.write(y+"<br/>");

//let
   // var x = 0 ; // allow
    // let x =0 ; // allow
    // const x = 0 ; //not allow
    // document.write(x+"<br/>");

//const
      // var z = 0 ; // allow
    // const z = 0 ; // allow
     // let z =0 ; //not allow
    // document.write(z+"<br/>");

//let and const end


//string concatenation 

let name1 = "fahad";
let name2 = "fahim";

document.write("my name is " +name1+ " haha<br/>");
document.write(`my name is  ${name2}  hihi<br/>`);



//function

// arrow function
const add = (x,y) =>{
    let add = x+y;
    document.write("add: " + add + "<br/>");
}

const sum = (x,y) => document.write(`sum:   ${x+y}  <br/>`);

add(5,10);
sum(3,4);
// arrow function end

//function end


//loop

//for loop
var x =5;
for (x=0; x<5 ; x++){
    document.write(x+"<br/>");
}
document.write(x+"<br/>");
//for loop end

//of loop
const cars = ["BMW", "Volvo", "Mini"];
let text = "";

for (let x of cars) {
  text += x + " ";
}
document.write(text+"<br/>");
//of loop end

// loop end

// map

// Create Objects
const apples = {name: 'Apples'};
const bananas = {name: 'Bananas'};
const oranges = {name: 'Oranges'};

// Create a new Map
const fruits = new Map();

// Add new Elements to the Map
fruits.set(apples, 500);
fruits.set(bananas, 300);
fruits.set(oranges, 200);

document.write(fruits.size(apples));

// map end
