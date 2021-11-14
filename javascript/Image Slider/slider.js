var img = ["img/Fahad.jpg", "img/fahadi.jpg", "img/FahadWithFriends.jpg"]

var count = 0;

function next(){
    count++;
    if(count >= img.length){
      count = 0;
      document.querySelector("#img").src = img[count];
    } 
    else{
        document.querySelector("#img").src = img[count];
    }
}

function previous(){
    count--;
    if(count < 0){
        count = 2;
       document.querySelector("#img").src = img[count];
    }
    else{
        document.querySelector("#img").src = img[count];
    } 
}
