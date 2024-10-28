<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkx</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>

        <label>y:</label>
        <input type="text" name="y"><br>

        <label>z:</label>
        <input type="text" name="z"><br>

        <input type="submit" value="total">
    </form>

</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x);
    // $total = round($x);
    // $total = floor($x);  //floor is round down
    // $total = ceil($x);  // ceil is round up
    // $total = sqrt($x);
    // $total = pow($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi(); // This will just show the PI
    $total = rand(1, 6);


    echo $total;
?>