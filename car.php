<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;

    function __construct($model, $cost, $milage=0)
    {
      $this->make_model = $model;
      $this->price = $cost;
      $this->miles = $milage;
    }
    function setMilage ($new_milage)
    {
      $float_milage = (float) $new_milage;
      if ($float_milage !=0){
        $formatted_milage = number_format($float_milage, 1);
        $this->miles = $formatted_milage;
      }
    }
}
$porsche = new Car ("2014 Porche 911", 114991, 7864);
$ford = new Car ("2011 Ford F450", 55995, 14241);
$lexus = new Car ("2013 Lexus RX 350", 44700, 2000);
$mercedes = new Car ("Mercedes Benz CLS550", 39900);
$mercedes->setMilage("10");

$cars = array($porsche, $ford, $lexus, $mercedes);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
