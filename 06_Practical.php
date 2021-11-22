<!-- Sum of first n naturak numbers -->
<html lang="en">
<head>
    <title>Print numbers</title>
</head>
<body>
    <form action="06_Practical.php" method="post">
        Enter number: <input type="text" name="num" id="">
        <button type="submit">Get Sum</button>
    </form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $n=$_POST['num'];
    $sum=0;
    for ($i=1; $i <=$n; $i++) { 
        $sum+= $i;
    }
    echo "Sum of first $n natural numbers are <br> $sum";
}

?>
</html>