<?php
//while loop
$a=10;
while($a <=15)
{
    echo "The result is $a <br>";
    $a++;
}echo "<br><br>";

$i=0;
while($i<6){
    echo "the value of $i is ";
    echo $i+1;
    echo "<br>";
    $i+=2;
}
echo "<br><br>";

$x=5;
while($x>=1){
    echo "The number is $x<br>";
    echo $x--;
}
echo "<br><br>";
 

//do-while loop
$b=0;
do{
    echo "The number is $b <br> ";
    $b+=10;
}
while($b <=100);
echo "<br><br>";

$j=1;
do{
    echo  "$j <br>" ;
    $j++;
}
while($j<4);
echo "<br><br>";

$y=100;
do{
    echo  " The role  is$y <br>" ;
    --$y;
}
while($y>90);
echo "<br><br>";


//for loop
for($c=1; $c<=12; $c+=3)
{
    echo"The age is $c <br>";
}
echo "<br><br>";

for ($index=0; $index <5 ; $index++) { 
    // initialization, condition, updation
    echo "the number is $index <br>";
}
echo "<br><br>";

for($c=10; $c>=2; $c-=3)
{
    echo"The gape is $c <br>";
}
echo "<br><br>";


//for-each loop
$age = array("Faizan"=>"8", "Ayesha"=>"5", "Zoha"=>"4");

foreach($age as $d => $val) {
  echo "$d= $val<br>";
}
echo "<br><br>";

$arr=array("red","green","blue");
foreach ($arr as  $value) {
    echo "$value<br>";
}
echo "<br><br>";

$model=array("redmi","samsung","nokia");
foreach ($model as  $v) {
    echo "$v<br>";
}
?>