//Check if only letters are entered
function justLetters(inputtxt){
    var letters = /^[A-Za-z]+$/;
    var text;
    if(inputtxt.value.match(letters))
    {
        text = "That is indeed a good choice!";
    }
    else{
        alert("An animal name can only contain letters");
    }
    document.getElementById("demo").innerHTML = text;
}