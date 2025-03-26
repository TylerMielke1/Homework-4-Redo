<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 4</title>
</head>

<body class="body">
<div class = "title" >
<h1> I Can Guess Your Favorite Coffee </h1>
<br>
</div>

<form action="results.php" method="post" class="Coffee-Quiz">
<?php  

/*
 * This file generates a quiz form that guesses the user's favorite coffee based on their answers to several questions.
 * Author: Tyler Mielke
 * Email: tmielke@school.edu
 */

$question1_answers = array("Spring", "Summer", "Fall", "Winter"); 

// Generates the first question about favorite season
print("<div class='question'>");
print("<h2>Question 1: What is your favorite season?</h2>");
$counter = 1;
foreach($question1_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q1-seasons' id='q1-$counter' value='$counter' required > $answer</label>");
    print("</div>");
    $counter++;
}

$question2_answers = array ("Not alot", "A little", "A lot");

// Generates the second question about sugar preference
print("<div class='question'>");
print("<h2>Question 2: How much sugar do you like in your coffee?</h2>");
$counter = 1;
foreach($question2_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q2-sugar' id='q2-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}

$question3_answers = array("No cream", "A little", "A lot");

// Generates the third question about cream preference
print("<div class='question'>");
print("<h2>Question 3: How much cream do you like in your coffee?</h2>");
$counter = 1;
foreach($question3_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q3-cream' id='q3-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}

$question4_answers = array("Black", "Blonde", "Medium", "Dark");

// Generates the fourth question about roast preference
print("<div class='question'>");
print("<h2>Question 4: What roast do you prefer?</h2>");
$counter = 1;
foreach($question4_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q4-roast' id='4-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}

$question5_answers = array("No", "Yes");

// Generates the fifth question about flavored coffee preference
print("<div class='question'>");
print("<h2>Question 5: Do you like flavored coffee?</h2>");
$counter = 1;
foreach($question5_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q5-flavor' id='5-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}

$question6_answers = array("No", "Yes");

// Generates the sixth question about iced coffee preference
print("<div class='question'>");
print("<h2>Question 6: Do you like iced coffee?</h2>");
$counter = 1;
foreach($question6_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q6-iced' id='6-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}

$question7_answers = array("Starbucks", "Dunkin Donuts", "Tim Hortons");

// Generates the seventh question about favorite coffee shop
print("<div class='question'>");
print("<h2>Question 7: What is your favorite coffee shop?</h2>");
$counter = 1;
foreach($question7_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q7-shop' id='7-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}

$question8_answers = array("9am", "12pm", "3pm", "6pm");

// Generates the eighth question about the time of day for drinking coffee
print("<div class='question'>");
print("<h2>Question 8: What time of day do you drink coffee?</h2>");
$counter = 1;
foreach($question8_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q8-time' id='8-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}

print("</div>");
    
?>
    
<a href="results.php"><button type="button" name="submit-button" id= "submit-button"> Submit </a>

</html>
