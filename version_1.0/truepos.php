<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$num1 = $_POST['firstnum'];
	$num2 = $_POST['secondnum'];

	$num1sqr = $num1 * $num1;
	$num2sqr = $num2 * $num2;

	$numadd = $num1sqr + $num2sqr;

	$numroot = sqrt($numadd);

	$ans = $numroot * 2;

	
    if (isset($_POST['btnDelete'])) {
        unset($num1, $num2);
    }
}

?>

<style>
body {
	font: Arial, Helvetica, sans-serif;
	color: white;
}
#container {
	width: 242px;
	height: 171px;
	padding: 5px;
	background: #514b4b;
	border-radius: 3px;
	position: fixed;
	top: 50%;
	margin-top: -85px;
	margin-left: -126px;
	left: 50%;
	text-align: center;
	box-shadow:5px 5px 8px #000;
}
#instructions {
	position: fixed;
	left: 12.5%;
	margin-top: 80px;
	width: 75%;
	height: auto;
	text-align: center;
	color: white;
	background: #514b4b;
	box-shadow:5px 5px 8px #000;
	border-radius: 3px;
	padding: 5px;
	
}
a, a:hover, a:visited {
	text-decoration: none;
	color: #0f0;
}
strong {
	font-size: 40px;
}
table {
	border-collapse:collapse;
}
table, tr, td {
	border: 1px solid #000;
	color: white;
}
</style>
<body>
<div id="instructions">
<p>Thank you for using the true location calculator by <a href="http://tomascordero.com/">Tomas Cordero</a>! To use it just enter the tolerance of datum A and the tolerance of datum B then hit submit. If you like it please share it!</p>
</div>
<div id="container">

<form action="" method="post">
	<center><table>
		<tr>
 			<td>Tolerance A:</td>
 			<td><input type="text" name="firstnum" /></td>
 		</tr>
 		<tr>
 			<td>Tolerance B:</td>
 			<td><input type="text" name="secondnum" /></td>
 		</tr>
 		<tr style="text-align: center;">
 			<td>Select One:</td>
 			<td><input type="submit" name="btnSubmit" value="Submit" /><input type="submit" name="btnDelete" value="Reset" /></td>
 		</tr>	
 	</table></center>
</form>
<?php echo 'The true position is: <br/>';
 echo '<strong>' .number_format($ans,4). '</strong>'; ?>
</div>
</body>