<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3 second html file</title>

        <!--Call the Javascript functions-->
        <script src="javascript.js"></script>
    </head>

    <body>

        <h1>Animals in Quebec</h1>
        <h2>Amphibians and Reptiles</h2>
        <h3>Species found in Mont-Saint-Hilaire</h3>

        <?php
        echo "Here are some amphibians species found around the mountain:";
        ?>

        <!-- Show pictures of amphibians-->
        <ul>
            <li><span style="color:dodgerblue;"> Salamander</span> </li>
            <img src="Images/salamander.jpg" alt="Salamander" />
            <li><span style="color:dodgerblue;"> Wood Frog</span> </li>
            <img src="C:\Users\louis\OneDrive\Documents\GitHub\Webservers_Intro\Images\woodfrog.jpg" alt="Wood Frog" />
            <li><span style="color:dodgerblue;"> Garter Snake</span> </li>
            <img src="Images/gartersnake.png" alt="Garter Snake" />
        </ul>
        </br>
        
        <?php
        echo "Did you ever see one of these animals before?"
        ?>

        <!--Animal seen by user sent to amphibians table in database-->
        <form action="database.php" method="post">
            <select id="species" name="species">
                <option value="Salamander">Salamander</option>
                <option value="Wood Frog">Wood Frog</option>
                <option value="Garter Snake">Garter Snake</option>
                <option value="None">Never saw any of these</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        </br> <br>
        
        <!-- Invite user to visit another page-->
        <br><br>
        <p>Now if you want to learn about birds, click <a href="birds.php"> here</a>.</p>
        
    </body>
</html>