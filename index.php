<?php
//enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!empty($_POST)){
    echo print_r($_POST);
    //echo $_POST['flavors[]'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
    <form method="post" action="">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"><br>
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
                if (!empty($_POST)) {
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
    </form>
</body>
</html>