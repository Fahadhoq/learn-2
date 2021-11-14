//pratice callback

const StudentName = (stu_name , callback ) => {
    console.log("StudentName " + `${stu_name}`);

    callback();
}

const AllStudent = (stu1 , stu2) => {
    console.log("Student1 " + `${stu1}`);
    console.log("Student2 " + `${stu2}`);
}

const StudentRoll = (stu_roll , callback) => {
    console.log("StudentRoll " + `${stu_roll}`);
callback();
}

StudentName("fahad", function f1(){
    StudentRoll("10" , function f2(){
        AllStudent("stu1" , "stu2"); 
    });
});