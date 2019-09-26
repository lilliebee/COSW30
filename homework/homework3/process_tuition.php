<body>
   <h1>Tuition Cost</h1>
    
 <?php
$resident = $_POST['resident'];
$units = $_POST['units'];
$services = $_POST['units'];
$parking = $_POST['units'];
$costoftuition = $resident * $units;




echo "<p> Cost of tuition: $units units x $resident = $costoftuition </p>";




?>
</body>
