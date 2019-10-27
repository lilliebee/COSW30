<?php

$quote= $_POST['quote'];  


echo "<p>Your original list is: </p>";
    $inputList = explode(' ', $quote);
        foreach($inputList as $value) {
            echo "<p>$value</p>";
        }
        
    echo "<p>Word Count: " .  count($inputList) . "</p>";
  


    echo "<p >An alphabetized version of your list: </p>";
    natcasesort($inputList);
        foreach($inputList as $value) {
            echo "<p>$value</p>";
        }
    

    echo "<p>A reverse alphabetized version of your list: </p>";
    rsort($inputList);
        foreach($inputList as $value){
            echo "<p>$value</p>";
        }
   


    array_push($inputList, 'Mars', 'Mercury', 'Neptune');

    echo "<p >Reverse alphabetized version plus three random words: </p>";
        foreach($inputList as $value) {
            echo "<p>$value</p>";
        }
        
    echo "<p>Word Count: " .  count($inputList) . "</p>";
   
    
  
    array_splice($inputList, 0, 3);

    echo "<p>Reverse Alphabetized Version With First Three Words Removed: </p>";
        foreach($inputList as $value) {
            echo "<p>$value</p>";
        }
    echo "<p>Word Count: " .  count($inputList) . "</p>";
    
    echo "<button><a href=\"quote.html\">Try Again!</a></button>";
   
   echo "<br><button><a href=\"populations.php\">Population Tables</a></button>";
    

?>