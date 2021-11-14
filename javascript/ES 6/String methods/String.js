// all these methods are case sensitive

// startsWith (searchString, Position) -> check a srting starts with another string
let message = "i am fahad";
document.write("1 : "+message.startsWith("i")+ "<br/>"); // return true or false
document.write("2 : "+message.startsWith("I")+ "<br/>"); // flase return because I. cause sensitive

document.write("3 : "+message.startsWith("am" , 2)+ "<br/>"); // give index number to start matching
document.write("4 : "+message.startsWith("a" , 2)+ "<br/>");

// endsWith (searchString, length) -> check a srting ends with another string
document.write("5 : "+message.endsWith("fahad")+ "<br/>");
document.write("6 : "+message.endsWith("ad")+ "<br/>");


// includes (searchString, position) -> check if a string contains another string
document.write("7 : "+message.includes("fahad")+ "<br/>");
document.write("8 : "+message.includes(" ")+ "<br/>");
document.write("9 : "+message.includes(" a")+ "<br/>");
document.write("10 : "+message.includes(" s")+ "<br/>");

