<?php 
$name = ['Ele', 'Diana', 'Bayleigh', 'Patrick', 'Ryan'];

function greeting($nametest) {
    echo '<p>Hello, my name is ' .$nametest. '</p>';

}

foreach($name as $name) {
    greeting($name)
}