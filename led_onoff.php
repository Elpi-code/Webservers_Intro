<!DOCTYPE html>
<html>
    <head>
        <title>Toggle LED</title>
    </head>

    <body>
        <h1>Toggle LED</h1>

        <p>This page is used to turn an LED ON or OFF by cliking on the button below.</p></br>
        <form method="post" action="led_onoff.php">
            <input type="submit" name = "click" value="Click me"/></br>
        </form>

        <?php
            //Execute the function when the form above has been submitted
            if(array_key_exists('click',$_POST)){
                toggle();
            }

            //Read Switch value and echo it to user
            $opt = `gpio read 2`;
            if($opt == 0){
                echo "</br>The switch is as LOW as it can be!</br>";
            }
            else{
                echo "</br>The switch is higher than ever!</br>";
            }

            function toggle(){
                //Get value of GPIO pin 0 (the 3.3V)
                $opt = `gpio read 0`;

                //Toggle it ON if pin is low
                if($opt == 0){
                    $opt=  `gpio write gpio.0 1`;
                    echo "<div>$opt</div>";
                    echo "</br>Your LED should be ON!</br>";
                }

                //Toggle it OFF if pin is high
                else if ($opt == 1){
                    $opt = `gpio write gpio.0 0`;
                    echo "<div>$opt</div>";
                    echo "</br>Your LED should be OFF now!</br>";
                }
            }
        ?>
    </body>
</html>