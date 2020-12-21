<!DOCTYPE html>
<html>

<body>
    <?php
    
        //Variables
        $servername = "localhost";
        $username = "LP";
        $password = "Raspberry#p1";
        $dbname = "animals";

        //From birds.php page
        $Person = $_POST["name"];
        $TypeSeen = $_POST["type"];
        $NumberSeen = $_POST["number"];

        //From amphibians.php page
        $species = $_POST["species"];
        $ip = $_SERVER['REMOTE_ADDR'];

        //Connection to database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
        }

        //Insert data from form in birds.php
        $sql = "INSERT INTO birds2 (Person, TypeSeen, NumberSeen) VALUES ('$Person', '$TypeSeen', '$NumberSeen)";
        //Insert data from form in amphibians.php
        $sql = "INSERT INTO amphibians(IP_of_User, Animal_seen) VALUES ('$ip', '$species')";

        //Make sure there are no errors
        if (mysqli_query($conn, $sql)) {
            echo "Your information was successfuly processed! <br>";
            echo "Values entered: $Person, $TypeSeen, $NumberSeen <br>";
        }
        else {
            echo "Error: " .$sql . "<br>" . mysqli_error($conn);
        }

        //Close connection to database
        mysqli_close($conn);

        //Redirect to index.php
        //header('Location http://pinoupi.local:8080/index.php');
    ?>
</body>
</html>
