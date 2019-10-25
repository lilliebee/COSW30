<?php
// form input
$quote= $_POST['quote'];


echo "<p class=\"underlineText\">Your Original List Is: </p>";
    $inputList = explode(' ', $quote);
    foreach($inputList as $value){
        echo "<p>$value</p>";
    }
    echo "<p>Word Count: " .  count($inputList) . "</p>";
    echo "<br><br><br>";











?>