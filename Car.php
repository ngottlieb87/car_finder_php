<?php

class Car{
  public $make_model;
  public $price;
  public $miles;
}

$porsche = new Car();
$porsche -> make_model = "2014 Porsche 911";
$porsche -> price = 114991;
$porsche -> miles = 7864;

$ford = new Car();
$ford -> make_model = "1976 Mustang Mach1";
$ford -> price = 45664;
$ford -> miles = 45000;

$lexus = new Car();
$lexus -> make_model = "2013 Lexus RX 350";
$lexus -> price = 55995;
$lexus -> miles = 111223;

$mercedes = new Car();
$mercedes -> make_model = "Mercedes Benz CLS550";
$mercedes -> price = 39990;
$mercedes -> miles = 37979;

$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();

foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
  </div>
</body>
</html>
