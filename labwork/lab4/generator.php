<?php 

$numParagraphs = $_POST['paragraphs'];
$text= $_POST['text'];

$textExplode = explode(' ', $text);

shuffle($textExplode);

//for each loop ex table hw?
//foreach($textExplode as $key => $value) {
 //   echo"<p>$key Value: $value</p>";
//}

//$array= [1 => 'Test', 'Test'];
//use the implode function, to turn it back into a string 

$textImplode = implode(' ', $textExplode);

for ($i = 0; $i < $numParagraphs; $i++) {

echo"<p>$textImplode</p>";
}









//echo 'Text Explode';

//print_r($textExplode);

//echo 'Shuffled Text';
//print_r($shuffledText);

//for ($i= 0; $i <$numParagraphs; $i++) {
//   echo"<p>$text</p>";
   
//}
// $text = "Bacon ipsum dolor amet kielbasa andouille pork belly salami kevin capicola cow turducken shank jerky meatloaf ball tip venison tail ham hock. Flank shoulder sausage meatloaf jerky turducken. Ground round beef short ribs, sausage cupim chicken salami meatball flank tongue beef ribs. Fatback short ribs flank pork loin brisket t-bone pork burgdoggen,  shank swine. Shoulder ball tip doner, filet mignon pancetta short ribs kielbasa bacon sausage chuck.";

?>