<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
<?PHP
$flavors = array("grasshopper" => "The Grasshopper",
                "maple" => "Whiskey Maple Bacon",
                "carrot" => "Carrot Walnut",
                "caramel" => "Salted Caramel Cupcake",
                "velvet" => "Red Velvet",
                "lemon" => "Lemon Drop",
                "tiramisu" => "Tiramisu");

//echo $flavors[0];
//echo $flavors['grasshopper'];

?>



    <form action="">
        <label for="name">Name: </label>
        <input type="text" id="name">
        <li>
            <ul><input type="checkbox" value=''>The Grasshopper</ul>
            <ul><input type="checkbox" value="maple">Whiskey Maple Bacon</ul>
            <ul><input type="checkbox" value="carrot">Carrot Walnut</ul>
            <ul><input type="checkbox" value="caramel">Salted Caramel Cupcake</ul>
            <ul><input type="checkbox" value="velvet">Red Velvet</ul>
            <ul><input type="checkbox" value="lemon">Lemon Drop</ul>
            <ul><input type="checkbox" value="tiramisu">Tiramisu</ul>
        </li>

        <button type="submit">Submit</button>
    </form>
</body>
</html>