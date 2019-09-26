<body>
   <h1>Tuition Cost</h1>
    
 <?php
$resident = $_POST['resident'];
$units = $_POST['units'];
$services = $_POST['services'];
$parking = $_POST['parking'];




$costoftuition = $resident * $units;
$totalregistrationcost = $costoftuition + $services + $parking;
$award = rand(0, $totalregistrationcost);
$totalbalance = $totalregistrationcost - $award;




echo "<p> Cost of tuition: $units units x  $ $resident = $ $costoftuition </p>";

echo "<p> Mandatory Student Health Fee: $ 19 </p>";

echo "<p> College Services Card:$ $services </p>";

echo "<p> Parking Permit:$ $parking </p>";

echo "<p> Total Registration Costs:$ $totalregistrationcost </p>";


echo "<p> Scholarship Award: $award </p>";

echo "<p> Total College Balance Due:$ $totalbalance </p>";






?>
</body>
