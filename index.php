<!DOCTYPE html>
<html>
    <head>
        <title>Introduction page to the website</title>

        <!--Call the Javascript functions-->
        <script src="javascript.js"></script>
    </head>
    <body>
    
        <form name = "form2">
        <img src="Images/mont-st-hilaire.jpg" id="mshimage" width="500" height="333" 
            value="change" onclick="changeImg(document.form2.change)" />
        </form>
        </br>

        <h1>Animals in the Mont-Saint-Hilaire region</h1>
        <p>There are many different animals found around Mont-Saint-Hilaire. </br>
            Around 800 species of butterflies, 8 species of frogs, 4 species of salamanders, 2 species of snakes, </br>
            200 species of birds and many more live in the mountain.</p>
    
        <!--References to other pages in the website-->
        <p>If you are interested in learning about some birds that nest on the mountain, click <a href="birds.php"> here</a>.</br>
            If you prefer learning about some amphibians that reside around the mountain, click <a href="amphibians.php"> here</a>.</br>
            </br> Or for something that has nothing at all to do with this website, click here <a href="led_onoff.php"> here</a>! &#128513;</p>

    </body>
</html>