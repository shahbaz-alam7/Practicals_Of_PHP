<html lang="en">
<head>
    <title>Fibonacci series</title>
</head>
<body>
    <form action="07_Practical.php" method="post">
        Enter number: <input type="text" name="num" id="">
        <button type="submit">Print</button>
    </form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $n=$_POST['num'];
    $a=0;$b=1;
    echo "$a $b ";
    for ($i=2; $i < $n; $i++) { 
        $c=$a+$b;
        echo $c ." ";
        $a=$b;
        $b=$c;
    }

}


?>
</html>
