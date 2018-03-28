<!DOCTYPE html>
<html>
<head>
	<title>Receipt | CSU Go</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSU-Go_Stylesheet_A3.css">
</head>
<body>

	<div class="initial">Student Project #8: G.K.</div>

	<br><br><br>

	<div class="php-receipt-body">

		<div class="receipt-title">RECEIPT</div>

		<?php

			$items = array("Pencils","Notebook","Calculator");
			$qty = array($_GET["qty1"],$_GET["qty2"],$_GET["qty3"]);

			echo "<h1>Pencils</h1>";
			echo "Item quantity:" . $qty[0];
			echo "Subtotal:" . $qty[0] * 3;

			echo "<h1>Notebook</h1>";
			echo "Item quantity:" . $qty[1];
			echo "Subtotal:" . $qty[1] * 5;

			echo "<h1>Calculator</h1>";
			echo "Item quantity:" . $qty[2];
			echo "Subtotal:" . $qty[2] * 10;

			$fullsubtotal = ($qty[0] * 3) + ($qty[1] * 5) + ($qty[2] * 10);
			$tax = $fullsubtotal * .08;
			$total = $fullsubtotal + $tax;

			echo "Total:" . $total;

		?>

	</div>


</body>
</html>