//rest parameter
function sum(x,y, ...z){ //... always in last parameter
    document.write(`x = ${x}, y = ${y} , z = ${z}`);
}

sum(4,5,6,7,8,9,10);

//rest parameter end