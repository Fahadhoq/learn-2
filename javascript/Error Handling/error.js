//try, catch, finally

try{
    document.write("<br/> hi fahad <br/>");
    document.write(x+" <br/>");
    document.write("bye fahad <br/>");
}catch(err){
    document.write(err+"<br/>");
    document.write(err.name+"<br/>");
    document.write(err.message+"<br/>");
}finally{
    document.write("bye fahad <br/>");
}


//throw
document.querySelector("#button").addEventListener("click",function(){
   var value = document.querySelector("#text").value;

   try{
    if(value < 5){
        throw "number is low";
    }
    else if (value > 5){
        throw "number is high";
    }
    else{
        throw "number is between 5 to 10";
    }
   }catch(err){
       document.querySelector("h1").innerHTML = err;
   }
})
