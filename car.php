<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;

    function __construct($model, $cost, $milage=0)
    {
      $this->make_model = $model;
      $this->price = $cost;
      $this->miles = $milage;
    }
    function setModel ($new_model)
    {
      $string_model = (string) $new_model;
      if (strlen($string_model) > 0)
        $this->make_model = $string_model;
    }
    function getModel ()
    {
      return $this->make_model;
    }
    function setPrice ($new_price)
    {
      $float_price = (float) $new_price;
      if ($float_price !=0){
        $formatted_price = number_format($float_price, 2);
        $this->price = $formatted_price;
      }
    }
    function getPrice ()
    {
      return $this->price;
    }

    function setMilage ($new_milage)
    {
      $float_milage = (float) $new_milage;
      if ($float_milage !=0){
        $formatted_milage = number_format($float_milage, 1);
        $this->miles = $formatted_milage;
      }
    }
    function getMilage ()
    {
      return $this->miles;
    }


}
$porsche = new Car ("2014 Porsche 911", 114991.444, 7864);
$ford = new Car ("2011 Ford F450", 55995, 14241);
$lexus = new Car ("2013 Lexus RX 350", 44700, 2000);
$mercedes = new Car ("Mercedes Benz CLS550", 39900, 2222);
//$mercedes->setMilage("10.111");
//$porsche -> setPrice("1.111111");
//$lexus->setModel(3);

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
                $car_model = $car->getModel();
                $car_price = $car->getPrice();
                $car_milage = $car->getMilage();
                echo "<li> $car_model </li>";
                echo "<ul>";
                    echo "<li> $$car_price </li>";
                    echo "<li> Miles: $car_milage </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
