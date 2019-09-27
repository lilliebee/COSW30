<?php

$quote = $_POST['quote'];

$quote = explode('', filter_input(INPUT_POST, 'quote'));

$array = $quote;

foreach ($array as $value) {
    echo "$value<br>";
}

sort($array);

foreach ($array as $value)
{
    echo "$value <br>";
}

arsort($array);






?>