<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/jscript"></script>

<link href='http://fonts.googleapis.com/css?family=Londrina+Sketch' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<style>
body {
	font: Arial, Helvetica, sans-serif;
	color: white;
	padding:0;
	margin:0;
}
#container {
	width: 150px;
	padding: 10px;
	background: #333;
	margin:0 auto;
	border-radius: 10px;
	position: relative;
	-moz-box-shadow:0 0 8px #000;
	-ms-box-shadow:0 0 8px #000;
	-o-box-shadow:0 0 8px #000;
	-webkit-box-shadow:0 0 8px #000;
	box-shadow:0 0 8px #000;
}
#instructions {
	width: 50%;
	height: auto;
	text-align: center;
	color: white;
	background: #333;
	border-radius: 10px;
	border-top-left-radius:0;
	border-top-right-radius:0;
	padding: 10px;
	margin:0 auto;
	margin-bottom: 20px;
	-moz-box-shadow:0 0 8px #000;
	-ms-box-shadow:0 0 8px #000;
	-o-box-shadow:0 0 8px #000;
	-webkit-box-shadow:0 0 8px #000;
	box-shadow:0 0 8px #000;
}
a, a:hover, a:visited {
	text-decoration: none;
	color: #0f0;
}
input {
	width:100%;
}
</style>
<body>
<div id="instructions">
<div style="font-family: 'Oswald', sans-serif; font-weight:700; font-size: 60px;">
<script>
function myFunction() {
	var firstNum = document.getElementById("firstnum").value;
	var secondNum = document.getElementById("secondnum").value;
	var num1 = Math.pow(firstNum,2);
	var num2 = Math.pow(secondNum,2);
	var numsAdded = +num1 + +num2;
	var sqrtNums = Math.sqrt(numsAdded);
	var trupos = sqrtNums * 2;
	document.getElementById("demo").innerHTML = trupos.toFixed(4);
}
$(document).ready(function(){
    $("#thankYouBox").hide();
  $("#calculate").click(function(){
    $("#thankYouBox").slideDown('slow');
  });
});
</script>
<span style="font-size: 20px;">The true position is:</span><br/>
<span id="demo">0.0000</span>
</div>
</div>
<div id="container">

	Tolerance A:<br/>
    <input type="text" name="firstnum" id="firstnum" /><br/><br/>
    Tolerance B:<br/>
    <input type="text" name="secondnum" id="secondnum"/><br/><br/>
    <div style="text-align:center;">
	<button onClick="myFunction()" id="calculate">Calculate</button>
</div>
<div id="thankYouBox">
<p>Thank you for using my tool! Please book mark it and share it =)</p>
</div>
</div>
</body>