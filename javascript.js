//Check if only letters are entered
function justLetters(inputtxt){
    var letters = /^[A-Za-z]+$/;
    if(inputtxt.value.match(letters))
    {
        alert ("That is indeed a good choice!");
    }
    else{
        alert("An animal name can only contain letters");
    }
}