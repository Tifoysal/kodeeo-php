<?php
$txt="HELLO WORLD";
$a=20;
$b=10.5;
$c=$a+$b;


echo "$txt";
echo "<br>";
echo $c;
// scop variable
$x = 5; //global variable define outside the function
function myTest() {
  echo "<p>Variable x inside function is:</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>


<!-- Local variable -->
<?php
function Test() {
  $x = 5; //local variable define inside the function
  echo "<p>Variable x inside function is: $x</p>";
}
Test();

?>