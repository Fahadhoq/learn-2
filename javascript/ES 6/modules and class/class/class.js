//create class

class student{
    
    //must create a constructor in a class
	constructor(id,name){
		this.id = id;
		this.name = name;
	}

	//set method
	set studentName(name){
		this.name = name;
	}

	//get method
	get studentinfo(){
		document.write("get student id : "+this.id+"<br/>");
		document.write("get student name : "+this.name+"<br/>");
	}
}

let student1 = new student("101", "fahad");
document.write("student id : "+student1.id+"<br/>");
document.write("student name : "+student1.name+"<br/>");

//call set method
student1.studentName = "fahim";
document.write("set student name : "+student1.name+"<br/>");

//call get method
student1.studentinfo;

