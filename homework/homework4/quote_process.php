<?php

$quote = $_POST['quote'];

$textexplode = explode('', $quote);

echo"$textexplode";

sort($textexplode);



arsort($textexplode);






?>