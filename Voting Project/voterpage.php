<html>
<head>
	<title>VOTERS</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="voterpagecss.css">
</head>

<body>
	<form action="connect.php" method="post">
		<div class="login"> 
			<h1 >VOTERS' PAGE</h1>
			<hr>
	
			<label for="voter">Name </label><br />
			<input type="text" name="voter" class="voter" required /><br /><br />

			<label for="ano">Aadhar Number </label>
			<input type="number" name="ano" class="ano" required /><br /><br />

			<label for="choice">Choose your representative </label><br />
			
			<input type="radio" id="a" name="representative" value="a">
			<label for="a">Party A</label><br />
			
			<input type="radio" id="b" name="representative" value="b">
			<label for="b">Party B</label><br />
		
			<input type="radio" id="c" name="representative" value="c">
			<label for="c">Party C</label>
			
			<hr>

			<input class="btn" type="submit">
	</form>  
</body>
</html>
<html>