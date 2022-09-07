<?php
//indexed array
$name=array("Faizan", "Ayesha", "Zoha");
echo "I like" .$name[0]. "," .$name[1]. "and" .$name[2];
echo "<br><br>";

$age=array(9,5,4);
$number=count($age);
for($x=0;$x<$number;$x++){
echo $age[$x];
echo "<br>";
}
echo "<br><br>";

//associative array
$code=array("Faizan"=>"9", "Fabiha"=>"10");
echo "Faizan code is". $code['Faizan'];
echo "<br><br>";

$code=array("Faizan"=>"9", "Fabiha"=>"10");
foreach($code as $a=>$a_value){
    echo "key=".$a. ",value=".$a_value;
    echo "<br>";
}
echo "<br><br>";

//multidimensional array
$plant=array(
    array("Rose","queen",50)
);
echo $plant[0][0]. "is" .$plant[0][1]. "of flower and its cost is"
.$plant[0][2];
echo "<br><br>";

$model=array(
    array("Redmi","10pro" ,25000),
    array("Vivo","17s" ,15000)
);
for($serial=0; $serial<1;$serial++){
    echo "Mobile model and price<br>";
    for($col=0; $col<1;$col++){
        echo .$model[$serial][$col].;
    }

}
?>