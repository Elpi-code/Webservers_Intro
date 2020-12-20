<!DOCTYPE html>
<html>
    <head>
        <h1>GOOGLE</h1>
    </head>

    /* Creating a search button similar to the one on Google's page */
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
    }

    form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    }

    </style>
    </head>
    <body>
    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    </body>
    </br>

    // Displaying the search bar
    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
    <input type="text" placeholder="Search.." name="search2">
    <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    <?php
        // Connecting to database
        $servername = 'pinoupi.local';
        $username = 'pi';
        $password = 'Raspberry#p1';
        $dbname = 'searchterms';

        //Create and checking connection to mysql
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
        }

        /*Get IP Address of user and send to database*/
        $remote_ip = $_SERVER['REMOTE_ADDR'];
        $sql = "INSERT INTO IP VALUES $remote_ip";

        /*Log search term of user and send to database*/
        function logQuery($query){
            $sql = "INSERT INTO terms (query) VALUES ('$query')";
        }

        // This will redirect the user to the google.ca page
        header("Location: http://www.google.ca");
        exit();
        
    ?>

</html>