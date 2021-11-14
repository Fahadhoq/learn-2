//normal object

//object create
var student = {
	name     : "fahad",
	age      : 20,
	language : ['bangla', 'english'],
	print : function(){
		document.write(student.name + "<br/>");
        document.write(student.age + "<br/>");
        document.write(student.language + "<br/>");
	}
}
//object print use property
document.write("normal object. print use property" + "<br/>");
document.write(student.name + "<br/>");
document.write(student.age + "<br/>");
document.write("normal object. print use function property" + "<br/>");
student.print();

//normal object end

// constructor object

//constructor create
function Student(name,age,language){
	this.Name = name;
	this.Age = age;
	this.Language = language;

	//add function inside constructor
	this.Print = function(){
         document.write(this.Name + "<br/>");
         document.write(this.Age + "<br/>");
         document.write(this.Language + "<br/>");
	}
}

//object create
var student1 = new Student("fahad", 26, ['bangla', 'english']);
//object print use property 
document.write("constructor object. print use property" + "<br/>");
document.write(student1.Name + "<br/>");
document.write(student1.Age + "<br/>");
//object print use function
document.write("constructor object. print use function" + "<br/>");
student1.Print();

// constructor object end

//object
var student1 = {
	id : 100,
	name : "ammu",
	age : 45
}
document.write("object : "+ student1.name + "<br/>");
//object end

//array of object
var student2 = [
	{
        id   : 101,
        name : "fahad",
        age  : 20
	},
	{
        id   : 102,
        name : "fahim",
        age  : 15
	},
	{
        id   : 103,
        name : "toma",
        age  : 10
	} 
]
var student_name = JSON.stringify(student2, null, 2);
document.write(" array object : "+ student_name + "<br/>");

displayArrayObjects(student2);

function displayArrayObjects(arrayObjects) {
        var len = arrayObjects.length;
        var text = "";

        for (var i = 0; i < len; i++) {
            var myObject = arrayObjects[i];
            
            for (var x in myObject) {
                text += ( x + ": " + myObject[x] + ", ");
            }
            text += "<br/>";
        }

        document.write("  "+ text + "<br/>");
    }
            
//array of object end