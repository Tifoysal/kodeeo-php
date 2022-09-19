<?php
$time=date("H");
if($time<16){
    echo "Have a nice day";
}else{
    echo "Have a good night";
  
}
echo "<br>";
?>
<?php

$t= date("H");
if($t<10){
    echo "Have a nice morning"; 
}elseif($t<16)
{
echo "Have a nice day";
}else{
    echo "have a good night";
}

?>
