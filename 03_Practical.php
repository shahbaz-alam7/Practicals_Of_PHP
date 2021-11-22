<!--  Roots of the quadratic equation-->
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
    <form action="03_Practical.php" method="post">
      a: <input type="text" name="a" id="a" /> <br />
      <br />
      b: <input type="text" name="b" id="b" />
      <br> <br>
      c: <input type="text" name="c" id="c" />
      <br> <br>
      <button type="submit">Check</button>
    </form>
  </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $r= $b*$b-(4*$a*$c);
    if($r>0) {
        $root1 = (-$b + sqrt($r))/(2*$a);
        $root2 = (-$b-sqrt($r))/(2*$a);
        echo ("The roots of the following equation are:- <br>");
        echo ("1st root . $root1 <br> 2nd root . $root2");
    }
    else if($r==0) {
        $root= -$b/(2*$a);
        echo "The root is ".$root;
    }
    else {
        echo ("There is no root of this equation");
    }
}
?>