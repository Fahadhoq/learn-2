//X patten
for(var x=1; x<=5; x++){
    for(var y=1 ; y<=x; y++){
        document.write("x");
    
    }
    document.write("<br/>");
}

//sum the number which can be divited by 3 or 5

var y= 0;
document.write("The numbers are: ");
for(var x=1; x<=100; x++)
{

    if(x%5 == 0 && x%3 == 0)
    {
        document.write(x+" ");
        var y = y + x;
    }
    
    
}
document.write("="+y);