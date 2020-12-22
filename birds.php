<!DOCTYPE html>
    <html>
    <head>
        <title>Lab 3 first html file</title>
    </head>
    <body>
    
        <h1>Animals in Quebec</h1>
        <h2>Birds</h2>
        <h3>Species found in Mont-Saint-Hilaire</h3>
        <p>There are many different species of birds found around the mountain.</p>
        <div>Here are some of them:</div>
        <ul>
            <li> <span style="color:dodgerblue">Falcon</span> </li>
            <img src="Images/peregrinefalcon.jpg" alt="Peregrine falcon" />
            <li><span style="color:dodgerblue">Pileated Woodpecker</span></li>
            <img src="Images/pileatedwoodpecker.jpg" alt="Pileated Woodpecker" />
            <li><span style="color:dodgerblue">Cerulean Warbler</span></li>
            <img src="Images/warbler.jpg" alt="A warbler" />
        </ul>

        <!--Get user data and sanitize it with JavaScript function-->
        <p>Which one of these birds is your favorite?</p>
        <form name="form1" action="database.php">
        <input type="text" name="favorite"/>
        <input type="submit" name="submit" value="Submit" onclick="justLetters(document.form1.favorite)"/>
        </form>

        <!-- Suggest another page to the user-->
        <p>Now if you want to learn about amphibians and reptiles, click <a href="amphibians.php"> here</a>.</p>

    </body>
</html>