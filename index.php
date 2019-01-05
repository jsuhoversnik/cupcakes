<?php
/*
 * Jake Suhoversnik
 * 1/5/2019
 * IT 328 PHP Review Assignment 1
 * http://jsuhoversnik.greenriverdev.com/328/cupcakes/index.php
 * Cupcake order form, includes validation and posts an order summary
 */


    $flavors = array("grasshopper" => "The Grasshopper",
        "maple" => "Whiskey Maple Bacon",
        "carrot" => "Carrot Walnut",
        "caramel" => "Salted Caramel Cupcake",
        "velvet" => "Red Velvet",
        "lemon" => "Lemon Drop",
        "tiramisu" => "Tiramisu");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"<?php
            if(!empty($_POST["name"])){
                echo "value=\"" . $_POST["name"] .  "\"";
            }
       ?>><br>

        <?php
        //print a checkbox for each flavor option
            foreach($flavors as $key => $value){
                echo "<input type=\"checkbox\" name=\"flavors[]\" value=\"" . $key . "\"" ;

                //make the toppings sticky
                if (!empty($_POST["flavors"])) {
                    foreach( $_POST["flavors"] as $order){

                        //if value is in flavors array
                        if($key == $order)
                        {
                            echo "checked='checked' ";
                        }
                    }
                }

              echo  ">" . $value . "<br>";
            }
            ?>

        <button type="submit">Submit</button>

        <?php
            //if submit has been hit
            $isValid = true;
            if(!empty($_POST)) {

                if($_POST["name"] == "") {
                    echo "<p>Please enter a name</p>";
                    $isValid = false;
                }
                if(!isset($_POST["flavors"])){
                    echo"<p>Please select at least one flavor</p>";
                    $isValid = false;
                }

                foreach($_POST["flavors"] as $value){
                    if(!array_key_exists($value,$flavors)){
                        echo "<p>Invalid flavors selected</p>";
                        $isValid = false;
                    }
                }
                //if everything is valid
                if($isValid){
                    echo "<p>Thank you, " . $_POST["name"] . ", for your order!<br><br>";
                    echo "Order Summary:<ul>";

                    foreach($_POST["flavors"] as $order){
                        echo "<li>". $flavors[$order] . "</li>";
                    }

                    $price = 3.5;
                    $total = $price * sizeof($_POST["flavors"]);

                    //print total price formatted to show 2 decimal places
                    echo "</ul>Order Total: $" . number_format($total,2) . "</p>";
                }
            }
        ?>

    </form>
</body>
</html>