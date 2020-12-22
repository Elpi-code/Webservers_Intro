//Check if only letters are entered
function justLetters(inputtxt){
    var letters = /^[A-Za-z]+$/;
    if(inputtxt.value.match(letters))
    {
        alert("That is indeed a good choice!");
        return true;
    }
    else{
        alert("An animal name can only contain letters");
        return false;
    }
}

//Change image when clicking on it
function changeImg(){
    var image = document.getElementById('mshimage');
    if (image.src.match("Images/mont-st-hilaire.jpg")){
        image.src = "Images/mshlandscape.JPG";
    }
    else if(image.src.match("Images/mshtopview")){
        image.src = "Images/mont-st-hilaire.jpg";
    }
    else if(image.src.match("Images/mshlandscape.JPG")){
        image.src = "Images/mshtopview.JPG";
    }
}