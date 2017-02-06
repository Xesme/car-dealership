<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;
    public $color;
    public $transmission = "automatic";

    function setMiles($new_miles)
    {
        $float_price = (float) $new_miles;
        if ($float_price !=0) {
          $formatted_miles = number_format($float_miles, 1);
          $this->miles = $formmated_miles;
        }
    }
}


$porsche = new Car();
$porsche->make_model = "2014 Porsche 911";
$porsche->price = 114991;
$porsche->miles = "$7864.234";
$porsche->miles = "7800.09";
$porsche->color = "black";

$ford = new Car();
$ford->make_model = "2011 Ford F450";
$ford->price = 55995;
$ford->miles = 14241.124;
$ford->color = "blue";
$ford->transmission = "stick";

$lexus = new Car();
$lexus->make_model = "2013 Lexus RX 350";
$lexus->price = 44700;
$lexus->miles = 20000.5023;
$lexus->color = "red";

$mercedes = new Car();
$mercedes->make_model = "Mercedes Benz CLS550";
$mercedes->price = 39900;
$mercedes->miles = 37979.2356;
$mercedes->color = "grey";

$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->price < $_GET["price"] && $car->miles < $_GET["mileage"]) {
        array_push($cars_matching_search, $car);
}
}
 if (empty($cars_matching_search)) {
   echo "Sorry there are no cars that match your search";
 }
 else {
   echo "there are cars matching your search";
}
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
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                    echo "<li> Color: $car->color </li>";
                    echo "<li> Transmission: $car->transmission </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
