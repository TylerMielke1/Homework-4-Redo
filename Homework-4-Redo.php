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
</div>

<form action="results.php" method="post" class="Coffee-Quiz">
<?php  
$question1_answers = array("Spring", "Summer", "Fall", "Winter"); 

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

print("<div class='question'>");
print("<h2>Question 4: What roast do you prefer?</h2>");
$counter = 1;
foreach($question4_answers as $answer){
    print("<div>");
    print("<label><input type='radio' name='q4-roast' id='4-$counter' required value='$counter'> $answer</label>");
    print("</div>");
    $counter++;
}
?>
</html>
