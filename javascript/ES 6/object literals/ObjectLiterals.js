//normal function object return
function studentinfo(name,age){
	return {
		name : name ,
		age  : age,
	}
}
console.log(studentinfo("fahad", 20));

//function object return. in object literals.
function studentinfo(name,age){
	return {
		name,
		age,
	}
}
console.log(studentinfo("fahad", 20));

//normal function call in object
var student = {
	print : function(){
		document.write("normal function call in object </br>");
	}
}
student.print();

// function call in object literals

var student1 = {
	print(){
		document.write(" function call in object literals </br>");
	}
}
student1.print();

//concise method
var student2 = {
	'student print'(){
		document.write(" function print with concise method </br>");
	}
}
//concise method print
student2['student print']();