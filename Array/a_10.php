<!-- 10. Multidimensional Associative Array: -->
<!-- Write a PHP script to create a multidimensional associative array where each key is a city name and the value is an associative array of information (population, area, and country). Display the information for each city. -->
<?php
$cities = array(
    "New York" => array(
        "population" => 8419600,
        "area" => 468.9,
        "country" => "USA"
    ),
    "Tokyo" => array(
        "population" => 13929286,
        "area" => 845.0, 
        "country" => "Japan"
    ),
    "Paris" => array(
        "population" => 2140526,
        "area" => 40.7, // 
        "country" => "France"
    ),
    "Mumbai" => array(
        "population" => 20411000,
        "area" => 603.4, // 
        "country" => "India"
    )
);


$cityNames = array_keys($cities);
$numCities = count($cities);


for ($i = 0; $i < $numCities; $i++) {
    $city = $cityNames[$i]; 
    $info = $cities[$city];

    echo "City: $city<br>";
    echo "Population: " . $info["population"] . "<br>";
    echo "Area: " . $info["area"] . " square miles<br>";
    echo "Country: " . $info["country"] . "<br><br>";
}
?>