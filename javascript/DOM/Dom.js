//Get Element By ID

document.getElementById("ID1").innerHTML = "good bye";

// Get Element By Class

document.getElementsByClassName("ID2")[0].innerHTML = "i am back";

// Get Element by tag

document.getElementsByTagName("h1")[1].innerHTML = "ha ha";



// query selector

document.querySelector("#ID1").innerHTML = "kaka"; // by id
document.querySelector(".ID2").innerHTML = "caca"; // by class
document.querySelector("h1").innerHTML = "baba"; // by tag

document.querySelector("li a").innerHTML = "mama"; // li = parent, a = child
document.querySelector(".ID3 a").innerHTML = "mami"; // ID3 = calss & parent, a = child


// onclick

function message1(){

     document.querySelector("#ID4").innerHTML = "button click";
    
}

function message2(){
    document.querySelector("#ID4").innerHTML = "submit click";
}




//img change

function img1(){
    document.querySelector("#img").src = "img/Fahad.jpg";
}

function img2(){
    document.querySelector("#img").src = "img/FahadWithFriends.jpg";
}