<?php

$price = $_POST['price'];
$discount = $_POST['discount'];





function discountCalculations ($price, $discount) {
  $saleprice = $price - ($price * ($discount / 100));
  return $saleprice;
}

?>


<html>
 <title>Discount Calculator </title>
 <body>

<h1>Discount Calculator</h1>
 <form name="discountCalculator" action="functions.php" method="post" >
    <input type="text" name="price"  placeholder="Original Price" ><br>
    <input type="text" name="discount" placeholder="Discount" ><br>
   
     <input type="submit" value="Calculate values"/>
</form>


 <?php
echo discountCalculations($price, $discount);

 ?>
 </body>
</html>