<!-- ADDITION UBTRACTION MULTIPLICATION DIVISION -->
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
    <form action="01_Practical.php" method="post">
      Num1: <input type="text" name="num1" id="num1" /> <br />
      <br />
      Num2: <input type="text" name="num2" id="num2" />
      <br> <br>
      <button type="submit">Send</button>
    </form>
  </body>
</html>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $sum=$num1+$num2;
    $sub=$num1-$num2;
    $mul=$num1*$num2;
    $div=$num1/$num2;
    echo "Addition of $num1 and $num2 is - $sum <br>" ;
    echo "Subtraction of $num1 and $num2 is- $sub <br>" ;
    echo "Multiplication of $num1 and $num2 is - $mul <br>" ;
    echo "Division of $num1 and $num2 is - $div <br>" ;

}


?>