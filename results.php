<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 4 Results</title>
</head>

<body class="body">
<div class = "title" >
<h1> Is This Your Favorite Coffee? </h1>
<br>
</div>

<?php
$favorite_Coffee_Points = array(
    "Black Coffee" => 0,
    "Latte" => 0,
    "Cappuccino" => 0,
    "Mocha" => 0,
    "Americano" => 0,
    "Espresso" => 0,
    "Macchiato" => 0,
    "Affogato" => 0
);

if($POST['q1-seasons'] && $_POST['q2-sugar'] && $_POST['q3-cream'] && $_POST['q4-roast'] && $_POST['flavor']&& $_POST['q6-ice'] && $_POST['q7-coffeeshop'] && $_POST['q8-time']){
    switch($_POST['q1-seasons']){
        case "1":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        case "3":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        case "4":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        }

    switch($_POST['q2-sugar']){
        case "1":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        case "3":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        }
    
    switch($_POST['q3-cream']){
        case "1":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        case "3":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        }

    switch($_POST['q4-roast']){
        case "1":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        case "3":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        case "4":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        }


    switch($_POST['q5-flavor']){
        case "1":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        }
    
    switch($_POST['q6-ice']){
        case "1":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break;
        }
    
    switch($_POST['q7-coffeeshop']){
        case "1":
            $favorite_Coffee_Points["Starbucks"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Dunkin Donuts"] += 1;
            break;
        case "3":
            $favorite_Coffee_Points["Tim Hortons"] += 1;
            break;
        }

    switch($_POST['q8-time']){
        case "1":
            $favorite_Coffee_Points["Black Coffee"] += 1;
            $favorite_Coffee_Points["Americano"] += 1;
            $favorite_Coffee_Points["Espresso"] += 1;
            $favorite_Coffee_Points["Affogato"] += 1;
            break;
        case "2":
            $favorite_Coffee_Points["Latte"] += 1;
            $favorite_Coffee_Points["Cappuccino"] += 1;
            $favorite_Coffee_Points["Mocha"] += 1;
            $favorite_Coffee_Points["Macchiato"] += 1;
            break; 
        }

$top_class = array_search(max($favorite_Coffee_Points), $favorite_Coffee_Points);

print("<div class='results'>");
        
switch($top_class){
    case "Black Coffee":
        print("<h2> Your favorite coffee is Black Coffee! </h2>");
        break;

?>

</body>
</html>
