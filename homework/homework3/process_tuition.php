<body>
   <h1>Tuition Cost</h1>
    
 <?php
$resident = $_POST['resident'];
$units = $_POST['units'];
$services = $_POST['units'];
$parking = $_POST['units'];




$costoftuition = $resident * $units;
$totalcostoftuition = $costoftuition + $services + $parking;




echo "<p> Cost of tuition: $units units x  $ $resident = $ $costoftuition </p>";

echo "<p> Mandatory Student Health Fee: $ 19 </p>";

echo "<p> College Services Card: $services ";

echo "<p> Parking Permit: $parking ";

echo "<p> Total College Balance Due: $totalcostoftuition ";






?>
</body>
