<?php

$quote = $_POST['quote'];

$textexplode = explode('', $quote);

echo "<p>$textexplode</p>";

sort($textexplode);



arsort($textexplode);






?>