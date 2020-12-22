<!DOCTYPE html>
<html>
    <head>
        <title>Toggle LED</title>
    </head>

    <body>
        <h1>Toggle LED</h1>

        <p>This page is used to turn an LED ON or OFF by cliking on the button below.</p>
        <form method="post">
            <input type="submit" name = "click" value="Click me"/></br>
        </form>
        <?php
            function toggle(){
                //Get value of GPIO pin 0
                $opt = `gpio read 0`;

                //ON if pin is low
                if(($opt = `gpio read 0`) == 0){
                    $opt=  `gpio write gpio.0 1`;
                    echo "<div>$opt</div>";
                    echo "</br>Your LED should be ON!</br>";
                }

                //OFF if pin is high
                else if (($opt = `gpio read 0`) == 1){
                    $opt = `gpio write gpio.0 0`;
                    echo "<div>$opt</div>";
                    echo "</br>Your LED should be OFF now!</br>";
                }
            }

            //Execute the function when the form above has been submitted
            if(array_key_exists('click',$_POST)){
                toggle();
            }

            //Read Switch value and echo it to user
            $opt = `gpio read 2`;
            if(($opt) = `gpio read 2`) == 0){
                echo "</br>The switch is as LOW as it can be!</br>";
            }
            else{
                echo "</br>The switch is higher than ever!</br>";
            }
        ?>
    </body>
</html>