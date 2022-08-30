<?php
$x = "Hello Bangladesh";
$y = 'This is my practice area';
// Double qoutes and single are same.

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$a= 5985;
$b=50.03;
var_dump($a,$b);
  echo "<br>";
$bike = array("YAMAHA","SUJUKI","HONDA");
var_dump($bike);
echo "<br>";



class bike{
    public $name;
    public $model;
    public $color;
    public function __construct($name,$model,$color)
    {
        $this->name=$name;
        $this->model=$model;
        $this->color=$color;

    }
    public function message()
    {
        return "My new bike is a " . $this->name ." ". $this->model ." ". $this->color ." .";
    }
    
}
$myBike=new bike("YAMAHA","R15m","Black");
echo $myBike->message();
echo "<br>";
$myBike=new bike("SUJUKI","GIXXER SF","Blue");
echo $myBike->message();
echo "<br>";
$myBike=new bike("HONDA","XBlade","Red");
echo $myBike->message();
?>
