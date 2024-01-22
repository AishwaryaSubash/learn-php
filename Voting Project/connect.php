<html>
<head>
    <title>VOTING PORTAL</title>
</head>
<body>
    
<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "voting_portal";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $voter_name = $_POST['voter'];
    $voter_id = $_POST['ano'];
    $rep = $_POST['representative'];

    $sql = "insert into voters_list values ('$voter_name', '$voter_id', '$rep')";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('location: mainpage.php');
        echo 'Your response has been submitted.';
    }
    else {
        echo "An error has occurred. Please try after sometime.";
    }
?>  

</body>
</html>
<html>