<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<h1>Let's cover the String Functions</h1>";
echo "<h3>Sub-topic 1: Return a String Length</h3>";
echo "Below we will see the length of the string that holds the following
sentence: <strong>I am glad to see everyone!</strong><br>";
echo strlen("I am glad to see everyone!");
echo "<hr>";
echo "<h3>Sub-topic 2: Count Words in a String.</h3>";
echo "Of course you can quickly count and immediately say how many words in the following sentence are: 'How are you?'";
echo "<br>";
echo str_word_count("How are you?");
echo "<br>";
echo "And what about the next sentence in the line below? How many words are there?<br>";
echo "<u><em>Hey, honey! Do you need some help? Maybe you need some rest? WHy don't you just take a seat and watch TV?</em></u><br>";
echo "Answer: ";
echo str_word_count("Hey, honey! Do you need some help? Maybe you need some rest? Why don't you just take a seat and watch TV?");
echo " words are in the sentence above.";
echo "<hr>";
echo "<h3>Reverse a String</h3>";
echo "Now, you see the sentence written in such way: <em>gnirtS a esreveR</em><br>";
echo "Then, you will see that sentence written in the reverse way (see below).<br>";
echo strrev("gnirtS a esreveR");
echo "<hr>";
echo "<h3>Search For a Text Within a String</h3>";
echo strpos("Good morning!", "morning");
echo "<hr>";
echo "<h3>Text replacement in a String</h3>";
echo "Now I write <em>Good morning</em>. In the line below you will see slightly different sentence.<br>";
echo str_replace("morning", "evening", "Good morning");
?>
    
</body>
</html>