<?php

$quote= $_POST['quote'];

$textexplode = explode('', $quote);


$textexplodemplode = implode(' ', $textexplode);

for ($i = 0; $i < $textexplode; $i++) {

echo"<p>$textemplode</p>";
}








?>