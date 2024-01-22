<html>
<head>
	<title>VOTER INFO</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="adminpagecss.css">
</head>

<body>
	<h1>VOTERS' DATA</h1>
	<br/>

<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "voting_portal";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    

	

	$sql = "SELECT name, aadhar_no, choice FROM voters_list";
	$result = mysqli_query($conn, $sql);

	echo "<div class='table-div'>";
	echo "<table>";
    echo "<tr><td>Voter Name</td><td>Aadhar Number</td><td>Party Chosen</td></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
    	echo '<tr>';
    	echo '<td>'.$row["name"].'</td>'; 
		echo '<td>'.$row["aadhar_no"].'</td>';
		echo '<td>'.$row["choice"].'</td>';
    	echo '<tr>';
    }
    echo "</table>";
    echo "</div>";
?>  
    
</body>
</html>
<html>
