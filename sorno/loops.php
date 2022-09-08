<?php
//while loop
$x=1;
while($x<=5)
{
    echo "The number is: $x <br>";
    $x++;
}
echo "<br>";


$p=0;
while($p<=100)
{
    echo "The number is: $p<br>";
    $p+=5;
}
echo "<br>";
$i=100;
while($i>=0){
    echo "The number is:$i <br>";
    $i-=10;
}
echo "<br>";
 //DO while loop
 $a = 1;

do {
  echo "The number is: $a <br>";
  $a++;
} while ($a <= 5);
echo "<br>";
$a = 8;

do {
  echo "The number is: $a <br>";
  $a++;
} while ($a <= 5);
echo "<br>";
//for loop
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
  }
echo "<br>";
For($i =100;$i<=500;$i+=100){
    echo "The number is: $i <br>";
}
echo "<br>";
//neasted for loop
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?>