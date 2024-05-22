<?php
$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$street = $_POST["street"];
$postalcode = $_POST["postalcode"];
$city = $_POST["city"];
$pizzas = isset($_POST["pizza"]) ? $_POST["pizza"] : [];
$availablePizzas = [
    "margarita",
    "reine",
    "calzone",
    "carnivore",
    "pepperoni",
];

$pizzasAreAvailable = true;
foreach ($pizzas as $pizza) {
    if (!in_array($pizza, $availablePizzas)) {
        $pizzasAreAvailable = false;
    }
}

if (strlen($postalcode) > 0 && strlen($postalcode) < 6 && count($pizzas) > 0 && $pizzasAreAvailable) {
    $pizzaPrices = [
        "margarita" => 10,
        "reine" => 20,
        "calzone" => 50,
        "carnivore" => 120.50,
        "pepperoni" => 0.50,
    ];

    $total = 0;
    foreach ($pizzas as $pizza) {
        $total += $pizzaPrices[$pizza];
    };
    echo "le total de votre commande est de : <b>{$total}</b> euros !";
} else {
    echo "Something got wrong and you never know what ¯\_(ツ)_/¯";
}
