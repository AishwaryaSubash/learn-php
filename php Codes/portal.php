<html>
<head>
	<title>VOTING PORTAL</title>
</head>

<body>
	<form action="connect.php" method="post">
		<label for="voter">Name </label>
		<input type="text" name="voter" id="voter" required /><br />

		<label for="ano">Aadhar Number </label>
		<input type="number" name="ano" id="ano" required /><br />

		<label for="choice">Choose your representative </label><br />
		<input type="radio" id="a" name="representative" value="a">
		<label for="a">Party A</label><br>
		<input type="radio" id="b" name="representative" value="b">
		<label for="b">Party B</label><br>
		<input type="radio" id="c" name="representative" value="c">
		<label for="c">Party C</label>

		<input type="submit">
	</form>
</body>
</html>
<html>