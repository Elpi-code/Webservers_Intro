<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3 second html file</title>
    </head>
    <body>

        <h1>Animals in Quebec</h1>
        <h2>Amphibians and Reptiles</h2>
        <h3>Species found in Mont-Saint-Hilaire</h3>

        <?php
        echo "Here are some amphibians species found around the mountain:";
        ?>
        <ul>
            <li><span style="color:dodgerblue;"> Salamander</span> </li>
            <img src="/Images/salamander.jpg" alt="Salamander" />
            <li><span style="color:dodgerblue;"> Wood Frog</span> </li>
            <img src="/Images/woodfrog.jpg" alt="Wood Frog" />
            <li><span style="color:dodgerblue;"> Garter Snake</span> </li>
            <img src="/Images/gartersnake.png" alt="Garter Snake" />

        </ul>
        </br>
        
        <?php
        echo "Did you ever see one of these animals before?"
        ?>

        <form action="/amphibians.php">
            <select id="animal" name="animal">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <input type="submit">
        </form>
        </br> <br>
        
        <p>Which one is your favorite?</p>
        <!--Get data from user-->
        <input id="favorite">
        <button type="button" onclick="justLetters(favorite)">Submit</button>
        <p id="demo"></p>

        <!--Make sure data contains only letters-->
        <script>
            function justLetters(favorite){
                var letters = /^A[A-Za-z]+$;
                if(favorite.value.match(letters))
                {
                    text = "That is indeed a good choice!";
                    return true;
                }
                else{
                    text = "An animal name can only contain letters";
                    return false;
                }
                document.getElementById("demo").innerHTML = text;
            }
        </script>
       
        <br><br>
        <p>Any comments?</p>
        <form action="/forms.php">
            <textarea name="comment" rows="5" cols="30"></textarea> <br>
            <input type="submit" value="Submit">
        </form>

        <br>
        <p>Now if you want to learn about birds, click <a href="birds.php"> here</a>.</p>
        
    </body>
</html>