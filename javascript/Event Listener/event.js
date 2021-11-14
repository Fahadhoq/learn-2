var button = document.querySelector("button");
var input = document.querySelector("input");
var Tag = document.querySelector("h1");

button.addEventListener("click", myfunction);

function myfunction(){
    button.classList.add("style")

}


//annuminas function

Tag.addEventListener("mouseover", function(){
     Tag.classList.add("style");
     
});

Tag.addEventListener("mouseout", function(){
    Tag.classList.remove("style");

});

input.addEventListener("mouseover", function(){
    input.classList.add("style");
});

input.addEventListener("mouseout", function(){
    input.classList.remove("style");
});


// multipal listener use

var lan = document.querySelectorAll(".button").length;

for(i=0 ; i<lan ; i++)
{
    document.querySelectorAll(".button")[i].addEventListener("click", function(){
    
        var text = this.innerHTML;
        document.querySelector("h1").innerHTML = text + " is selected";
    });
}