<!DOCTYPE html>
<html>

<body>
    <?php
    
        //Variables
        $servername = "10.0.0.169";
        $username = "pi";
        $password = "Raspberry#p1";
        $dbname = "animals";

        $Person = $_POST["name"];
        $TypeSeen = $_POST["type"];
        $NumberSeen = $_POST["number"];

        //Connection to database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
       }

        //Insert data form form
        $sql = "INSERT INTO birds (Person, TypeSeen, NumberSeen) VALUES ('$Person', '$TypeSeen', '$NumberSeen);"

        //Make sure there are no errors
        if (mysqli_query($conn, $sql)) {
            echo "Your information was successfuly processed! <br>";
        }
        else {
            echo "Error: " .$sql . "<br>" . mysqli_error($conn);
        }

        //Close connection to database
        mysqli_close($conn);
    ?>
</body>
</html>
