<!-- Determine whether a triangle is isosceles or not -->
<html lang="en">
<head>
    <title>Triangle-Check</title>
</head>
<body>
    <form action="04_Practical.php" method="post">
        Side1: <input type="text" name="side1"><br><br>
        Side2: <input type="text" name="side2"><br><br>
        Side3: <input type="text" name="side3"><br><br>
        <button type="submit">Check</button>
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $side1=$_POST['side1'];
    $side2=$_POST['side2'];
    $side3=$_POST['side3'];
    if($side1==$side2||$side2==$side3||$side1==$side3){
        echo "It is an isoscles triangle..";
    }
    else{
        echo "Not an Isosceles triangle...";
    }
}


?>
</body>
</html>