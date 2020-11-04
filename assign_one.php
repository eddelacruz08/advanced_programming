<!DOCTYPE html>
<html>
<head>
	<title>Assignment One</title>
</head>
<script type="text/javascript">
	<?php
		if ( isset($_GET['action']) ) {
		    switch ($_GET['action']) {
		        case 'add':
		            $answer = $_GET['num1'] + $_GET['num2'];
		            break;
		        case 'subtract':
		            $answer = $_GET['num1'] - $_GET['num2'];
		            break;
		        case 'multiply':
		            $answer = $_GET['num1'] * $_GET['num2'];
		            break;
		        case 'divide':
		            $answer = $_GET['num1'] / $_GET['num2'];
		            break; 
		        default:
		        	echo "Please input number!";
		        	break;     
		    }
		}
		$sagot = $answer;
	?>
	
</script>

<script type="text/javascript">
	<?php
		  $x = $_GET['number1'];
		  $y = $_GET['number2'];
		  if ($x > $y)
		  {
		    $temp = $x;
		    $x = $y;
		    $y = $temp;
		  }
		  for($i = 1; $i < ($x+1); $i++)
		  {
		    if ($x%$i == 0 and $y%$i == 0)
		      $gcd = $i;
		  }
		  $total = $gcd;
	?>
</script>

<body>
<style type="text/css">
	body {
		background-color: #d1e3d6;
	}
	#buttonD
	{
		background-color: #333c52;
		color: #f7faf8;
		border: solid 1px black;
		font-size: 15px;
		padding: 2px 7px;
	}
	#alignD
	{
		padding-top: 135px;
		/*float:right;*/
		text-align:left;
		padding-left: 600px;
		position: absolute;
	}
	#alignF
	{
		padding-top: 140px;
		padding-left: 960px;
		float:absolute;
		text-align:left;
	}
	#name
	{
		padding-top: 230px;
		width:455px;
		float:absolute;
		text-align:right;
		font-size: 25px;
		position: absolute;
	}
	form{
		font-size: 20px;
	}
	form h1 {
		font-size: 40px;
	}
</style>
<div class="container">
		<div class="col-md-4">
			<form id="name" action="assign_one.php">
				<h1>Edmon M. Dela Cruz</h1>
			</form>
		</div>
		<div class="col-md-4">
			<form id="alignD" action="assign_one.php" method="get">
				<h1>Calculator</h1>
				Enter a first number: <br>
			    <input type="number" name="num1">
			    <br><br>
			    Enter a second number:  <br>
			    <input type="number" name="num2">
			    <br>
			    <br>
			    <button id="buttonD" type="submit" name="action" value="add">+</button>
			    <button id="buttonD" type="submit" name="action" value="subtract">-</button>
			    <button id="buttonD" type="submit" name="action" value="multiply">*</button>
			    <button id="buttonD" type="submit" name="action" value="divide">/</button>
				<br>
				<br>
				The answer is:  <?php echo $sagot; ?>
			</form>
		</div>
		<div class="col-md-4">
			<form id="alignF" action="assign_one.php" method="get">
				<h2>Finding GCD</h2>
				Enter a first number: <br>
			    <input type="number" name="number1">
			    <br><br>
			    Enter a second number: <br>
			    <input type="number" name="number2">
			    <br>
			    <br>
			    <button id="buttonD" type="submit" name="submit" id="submit" value="submit">submit</button>
			    <br>
			    <br>
				The GCD is:   <?php echo "$total"; ?>
			</form>
		</div>
	</div>
</div>

</body>
</html>
