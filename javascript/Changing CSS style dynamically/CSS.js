function addCSS(){
    var addCSS = document.querySelector("#paraID");

    addCSS.style.color = "red";

}

function removeCSS(){
    var removeCSS = document.querySelector("#paraID");

     removeCSS.style.color = "black";
}

// add from CSS

function addCSS1(){
    var addCSS = document.querySelector("#ID");

    addCSS.classList.add("para-style");
}

function removeCSS1(){
    var removeCSS = document.querySelector("#ID");
    
    removeCSS.classList.remove("para-style");
}