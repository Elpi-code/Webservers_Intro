<!DOCTYPE html>
<html>
<body>

    <?php
        echo "Here are the ProgramName options saved from the database:";
    
        $servername = '10.0.0.169';
        $username = 'pi';
        $password = 'Raspberry#p1';
        $dbname = 'animals';

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT ProgramName FROM Programs";
        $result = mysqli_query($conn, $sql);

        $i=0;
        while($row = mysqli_fetch_assoc($result)) {
            echo 'input type="radio"' .$row["ProgramName"]./>; <br>
            $i++;
        }
        
        mysqli_close($conn);
    ?>

</body>
</html>
