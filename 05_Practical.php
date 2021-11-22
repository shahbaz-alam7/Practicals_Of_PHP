<!-- Print first n natural numbers -->
<html lang="en">
<head>
    <title>Print numbers</title>
</head>
<body>
    <form action="05_Practical.php" method="post">
        Enter number: <input type="text" name="num" id="">
        <button type="submit">Print</button>
    </form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $n=$_POST['num'];
    for ($i=1; $i <=$n; $i=$i+1) { 
        echo $i ." <br> ";
    }
}

?>
</html>