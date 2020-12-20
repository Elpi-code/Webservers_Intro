//Check if only letters are entered
function justLetters(){
    var letters = /^A[A-Za-z]+$/;
    var x = document.forms["myForm"]["favorite"].value;

    if(x.value.match(letters))
    {
        alert("That is indeed a good choice!");
        return true;
    }
    else{
        alert("An animal name can only contain letters");
        return false;
    }
}