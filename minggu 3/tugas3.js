function theme(){

    var selectBox = document.getElementById("theme");
    var value = selectBox.options[selectBox.selectedIndex].value;
    if(value=="0"){
        var b = document.getElementById("warna");
        b.style.backgroundColor = "white";
        b.style.color = "black";
    }
    else{
        var b = document.getElementById("warna");
        b.style.backgroundColor = "black";
        b.style.color = "white";
    }
}

function cuaca(){
    var selectBox = document.getElementById("weather");
    var value = selectBox.options[selectBox.selectedIndex].value;
    var cuaca = document.getElementById("cuaca");
    if(value == "0"){
        
        cuaca.innerText = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream";
    }
    else if(value == "1"){
        cuaca.innerText = "Raise your words, not your voice. It is rain that grows flowers, not thunder."
    }
    else if(value == "2"){
        cuaca.innerText = "Prepare yourself so that you can be a rainbow in somebody else's cloud."
    }
    else{
        cuaca.innerText = "Don't forget: Beautiful sunsets need cloudy skies."
    }

}

function factor(){
    var x = document.getElementById("factor").value;
    var y = x;
    var hasil = document.getElementById("hasil");
    for(i = y-1; i>1 ;i--){
        y=y*i;
    }
    hasil.innerText = "The Factorial of "+x+" is "+y;
}