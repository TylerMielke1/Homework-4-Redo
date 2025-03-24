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
    print("<label><input type='radio' name='q1-color' id='q1-$counter' value='$counter' required > $answer</label>");
    print("</div>");
    $counter++;
}

$question2_answers = array
?>
</html>
