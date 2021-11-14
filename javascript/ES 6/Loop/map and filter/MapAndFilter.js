//map

var number = [10,20,30,24,10];

var NewNum = number.map(function(x){
    return x*x;
})

document.write("map: "+NewNum+"<br/>");

//filter

var num = [20,10,30,65,61,3,12];

var New = num.filter(function(x){
    return x > 10;
})

document.write("filter : "+New+"<br/>");


//map and filter 

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
//array of object end


function student_id(){
    // return student2.filter(function(x){
    //        return x.id >101;
    // });
	return student2.filter(function(x){
        return x.id >101;
	}).map(function(y){
		return y.name;
	})
}

displayArrayObjects(student_id());

function displayArrayObjects(arrayObjects) {
        var len = arrayObjects.length;
        var text = "";

        for (var i = 0; i < len; i++) {
            var myObject = arrayObjects[i];
            
            // for (var x in myObject) {
            //     text += ( x + ": " + myObject[x] + ", ");
            // }
            text += (myObject + "<br/>");
        }

        document.write("  "+ text + "<br/>");
    }

//map and filter end