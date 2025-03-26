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

if(isset($_POST['q1-seasons']) && isset($_POST['q2-sugar']) && isset($_POST['q3-cream']) && isset($_POST['q4-roast']) && isset($_POST['q5-flavor']) && isset($_POST['q6-iced']) && isset($_POST['q7-shop']) && isset($_POST['q8-time'])){
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
        case "Latte":
            print("<h2> Your favorite coffee is a Latte! </h2>");
            break;
        case "Cappuccino":
            print("<h2> Your favorite coffee is a Cappuccino! </h2>");
            break;
        case "Mocha":
            print("<h2> Your favorite coffee is a Mocha! </h2>");
            break;
        case "Americano":
            print("<h2> Your favorite coffee is an Americano! </h2>");
            break;
        case "Espresso":
            print("<h2> Your favorite coffee is an Espresso! </h2>");
            break;
        case "Macchiato":
            print("<h2> Your favorite coffee is a Macchiato! </h2>");
            break;
        case "Affogato":
            print("<h2> Your favorite coffee is an Affogato! </h2>");
            break;}
    
    }
    
else{
    print("<h2> There was an error! </h2>");
    }
    
    print("</div>");
    
?>
    
<a href="homework4.php"><button type="button" name="return-button" id= "return-button"> Restart </a>

</body>
</html>
