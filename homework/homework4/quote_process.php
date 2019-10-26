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

//Output list alphabetized 
    //natcasesort used for case-insensitive
    echo "<p class=\"underlineText\">Alphabetized Version Of List: </p>";
    natcasesort($inputList);
    foreach($inputList as $value){
        echo "<p>$value</p>";
    }
    echo "<br><br><br>";
    
     //Output the list reverse alphabetized 
    echo "<p class=\"underlineText\">Reverse Alphabetized Version Of List: </p>";
    rsort($inputList);
    foreach($inputList as $value){
        echo "<p>$value</p>";
    }
    echo "<br><br><br>";
    //Add three random words to end of list
    //interesting,amused,request
    array_push($inputList, 'interesting', 'request', 'amused');
    //Output new list
    //include word count
    echo "<p class=\"underlineText\">Reverse Alphabetized Version Plus Three Random Words: </p>";
    foreach($inputList as $value){
        echo "<p>$value</p>";
    }
    echo "<p>Word Count: " .  count($inputList) . "</p>";
    echo "<br><br><br>";
    
    //Remove first three words of list
    array_splice($inputList, 0, 3);
    //Output the new list
    //include word count
    echo "<p class=\"underlineText\">Reverse Alphabetized Version With First Three Words Removed: </p>";
    foreach($inputList as $value){
        echo "<p>$value</p>";
    }
    echo "<p>Word Count: " .  count($inputList) . "</p>";
    echo "<br><br><br>";

?>