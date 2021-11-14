var count = 0 ;

document.querySelector("#textarea").addEventListener("keypress",function(enent){
    var text = event.key;

    document.querySelector("p").innerHTML = "this is your chartare: " + text;

    count++;
    
    document.querySelector("h1").innerHTML = "this is your chartare: " + count;

    ButtonColor(count);

});

function ButtonColor(count){

    var a =document.querySelector("#button");    
    if(count<=5){
        a.classList.add("button");
    }else{
        a.classList.remove("button");
    }
  
}