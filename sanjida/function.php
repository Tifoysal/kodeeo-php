<?php
//function

function countryname(){
    echo "Bangladesh";
}
countryname();
echo "<br><br>";

//function argument
function studentid($id){
    echo "Her id no is $id <br>";
}
studentid(1);
studentid(2);
studentid(3);
echo "<br><br>";

function name_age($name,$age){
    echo "Her name is $name. <br>
    she is $age years old <br>";
}
name_age("Fabiha", 9);
name_age("Ayesha",5);
name_age("Zoha",4);
echo "<br><br>";

function sum(int $a,int $b){
    return  $a+$b;
}
echo sum(2,"3year");
echo "<br><br>";

// default argument
function name($name="Zoha"){
    echo "Her name is $name";
}
name("Ayesha");
name();
echo "<br><br>";
?>