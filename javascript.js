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

//Change image when clicking on it
function changeImg(){
    var image = document.getElementById('mshimage');
    if (image.src.match("Images/mont-saint-hilaire.jpg")){
        image.src = "Images/mshtopview.jpg";
    }
    else if(image.src.match("Images/mshtopview")){
        image.src = "Images/mshlandscape.jpg";
    }
    else if(image.src.match("Images/mshlandscape")){
        image.src = "Images/mont-saint-hilaire";
    }
}