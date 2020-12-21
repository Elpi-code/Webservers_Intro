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

        <!--Get user data and send to database-->
        <?php
        echo "Let us know your experience with birds <br>"
        ?>
        
        <form action="database.php" method="post">
            What is your name?</br><input type="text" name="name"/></br>
            What species of bird have you seen?</br><input type="text" name="type"/><br>
            How many have you seen?</br><input type="int" name="number"/><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>

        <!-- Suggest another page to the user-->
        <p>Now if you want to learn about amphibians and reptiles, click <a href="amphibians.php"> here</a>.</p>

    </body>
</html>