<?php
$params = array();
parse_str($_POST, $params);
$num1 = $_POST['firstnum'];
$num2 = $_POST['secondnum'];
$num1sqr = $num1 * $num1;
$num2sqr = $num2 * $num2;
$numadd = $num1sqr + $num2sqr;
$numroot = sqrt($numadd);
$ans = $numroot * 2;
echo $ans;
if(isset($_POST['btnDelete'])) {
	unset($num1, $num2);
}
?>