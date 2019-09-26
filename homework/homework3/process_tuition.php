<body>
   <h1>Tuition Cost</h1>
    
 <?php
$resident = $_POST['resident'];
$units = $_POST['units'];
$services = $_POST['services'];
$parking = $_POST['parking'];




$costoftuition = $resident * $units;
$totalregistrationcost = $costoftuition + $services + $parking;




echo "<p> Cost of tuition: $units units x  $ $resident = $ $costoftuition </p>";

echo "<p> Mandatory Student Health Fee: $ 19 </p>";

echo "<p> College Services Card: $services ";

echo "<p> Parking Permit: $parking ";

echo "<p> Total College Balance Due: $totalregistrationcost ";


echo " <p> Scholarship Award: rand(0, $totalregistrationcost);</p>"






?>
</body>
