//array Destructuring
let numbers1 = [10,20,30,40];
let [num1,num2,num3,num4] = numbers1;

let numbers2 = [10,20,30,40];
let [num10,num20,num30] = numbers2;

let numbers3 = [10,20,30,40];
let [num100,...num200] = numbers3;

document.write("array Destructuring : "+num1 +"<br/>");
document.write("array Destructuring : "+num30 +"<br/>");
document.write("array Destructuring : "+num200 +"<br/>");
//array Destructuring

//swap varible
var a=10 ; var b=20;
document.write("a = : "+a +"<br/>");
document.write("b = : "+b +"<br/>");

//swap
[a,b] = [b,a];
document.write("swap varible. a = : "+a +"<br/>");
document.write("swap varible. b = : "+b +"<br/>");
//swap varible end

//object Destructuring
document.write("***** object Destructuring ******* <br/>");
const student1 = {
    id : 101,
    name : "fahad",
    age : 20
}

var {id, name, age} = student1;

document.write("student1 id = : "+ id +"<br/>");
document.write("student1 name = : "+ name +"<br/>");
document.write("student1 age = : "+ age +"<br/>");

const student2 = {
    id : 102,
    name : "fahim",
    age : 10
}

var {id, age} = student2;

document.write("student2 ID = : "+ id +"<br/>");
document.write("student2 AGE = : "+ age +"<br/>");
 
const student3 = {
    id : 103,
    name : "toma",
    age : 5,
    language : {
        native : "bangla",
        program : "c,c++"
    }
}

var {id, language} = student3;
var {native, program} = student3.language;

document.write("student3 ID = : "+ id +"<br/>");
document.write("student3 Language = : "+ language.native +"<br/>"); 

document.write("student3 Language. native = : "+ native +"<br/>");
document.write("student3 Language. programming = : "+ program +"<br/>");  
//object Destructuring end

//function Destructuring 
document.write("***** function Destructuring ******* <br/>");

 let student4 = {
    id : 101,
    name : "fahad"
 }

 //normal
 const student_info1 = (student) => document.write("student ID : "+ student.id + ", student Name : "+ student.name +"<br/>");
 //Destructuring
 const student_info2 = ({id,name}) => document.write("student id : "+ id + ", student name : "+ name +"<br/>");
 

 student_info1(student4);
 student_info2(student4);

 

//function Destructuring end