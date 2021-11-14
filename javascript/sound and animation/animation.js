for ( var i = 0; i< 3; i++){
    document.querySelectorAll(".button")[i].addEventListener("click", function(){
       var text = this.innerHTML;

      console.log(text);

       audioPlay(text);

       AnimationPlay(text);
       
    });
}

document.addEventListener("keypress",function(event){
    var text = event.Key;

    console.log(text);

    audioPlay(text);
    // AnimationPlay(text);

});

function audioPlay(text){
    
    switch(text){
        case "a":
            var audio = new Audio("sounds/a.mp3");
            audio.play();
            break;

        case "b":
             var audio = new Audio("sounds/B.Wav");
             audio.play();
             break;

        case "c":
                 var audio = new Audio("sounds/C.Wav");
                 audio.play();
                 break;        
    }
}

function AnimationPlay(text){
   var button = document.querySelector("."+text);
     
   button.classList.add("anim");

   setTimeout(function(){
       button.classList.remove("anim");
   },1000);
}