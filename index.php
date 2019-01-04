<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>

    <form action="">
        <label for="name">Name: </label>
        <input type="text" id="name">
        <li>
            <?PHP
            $flavors = array("grasshopper" => "The Grasshopper",
                "maple" => "Whiskey Maple Bacon",
                "carrot" => "Carrot Walnut",
                "caramel" => "Salted Caramel Cupcake",
                "velvet" => "Red Velvet",
                "lemon" => "Lemon Drop",
                "tiramisu" => "Tiramisu");


            foreach($flavors as $key => $value){
                echo "<ul><input type=\"checkbox\" value=\"" . $key . "\">". $value ."</ul>";
            }

            ?>
        </li>

        <button type="submit">Submit</button>
    </form>
</body>
</html>