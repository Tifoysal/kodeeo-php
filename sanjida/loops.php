<?php
//while loop
$a=10;
while($a <=15)
{
    echo "The result is $a <br>";
    $a++;
    
}

//do-while loop
$b=0;
do{
    echo "The number is $b <br> ";
    $b+=10;
}
while($b <=100);


//for loop
for($c=1; $c<=12; $c+=3)
{
    echo"The age is $c <br>";
}

//for-each loop
$age = array("Faizan"=>"8", "Ayesha"=>"5", "Zoha"=>"4");

foreach($age as $d => $val) {
  echo "$d= $val<br>";
}

?>