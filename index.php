<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
    <form method="post" action="">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"<?php
            if(!empty($_POST["name"])){
                echo "value=\"" . $_POST["name"] .  "\"";
            }
       ?>><br>

            <?PHP
            $flavors = array("grasshopper" => "The Grasshopper",
                "maple" => "Whiskey Maple Bacon",
                "carrot" => "Carrot Walnut",
                "caramel" => "Salted Caramel Cupcake",
                "velvet" => "Red Velvet",
                "lemon" => "Lemon Drop",
                "tiramisu" => "Tiramisu");


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

              echo  ">" . $value . "</input><br>";
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
            }

        ?>

    </form>
</body>
</html>