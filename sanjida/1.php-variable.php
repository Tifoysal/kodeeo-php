<?php
$txt = "Hello world!";
$x = 5;
$z = 10.5;
echo $x+$z;
echo"<br>";
echo "$txt";
echo "<br>";

$name="Zoha";
echo "<p>Her name is $name</p>";
echo "<br>";

$age=4;
echo"<p>she is"  .$age. "years old</p>";
echo"<br>";

#global scope variable
$country="Bangladesh";
function test()
{
    global $country;
    echo " <p>This is $country</p>";
}
test();


#local scope variable
function fortest()
{
    $city="Dhaka";
    echo "<p>$city is the capital of Bangladesh</p>";
}
fortest();
 


//here I learn variable

?>


