<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php echo '
    <form action="02_Practical.php" method="POST">
        Circle: <input placeholder="Enter radius" type="text" name="radius" id="b">
        <button name="circle">Area</button> <br> <br>
        Rectangle: <input placeholder="Enter length" type="text" name="len" id="">
        <input placeholder="Enter bredth" type="text" name="bre" id="a">
        <button name="rectangle">Area</button> <br> <br>
        Triangle: <input placeholder="Enter height" type="text" name="height" id=$this.value>
        <input placeholder="Enter base" type="text" name="base" id="">
        <button name="triangle">Area</button> <br> <br>
    </form>';
        // <!-- Circle: <input placeholder="Enter radius" type="text" name="radius" id="">
        // <button type="submit">Area</button> <br> <br> -->
if(isset($_POST['circle'])){
    $r=$_POST['radius'];
    $cirArea= 3.14*$r*$r;
    echo "Area of circle is ".$cirArea;
}
if(isset($_POST['rectangle'])){
    $l=$_POST['len'];
    $b=$_POST['bre'];
    $recArea= $l*$b;
    echo "Area of Rectangle is ".$recArea;
    
}
if(isset($_POST['triangle'])){
    $h=$_POST['height'];
    $base=$_POST['base'];
    $triArea= 0.5*$h*$base;
    echo "Area of Triangle is ".$triArea;
   
}

?>
</body>
</html>