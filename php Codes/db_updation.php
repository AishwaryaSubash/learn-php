<!--db_updation.php-->
<!DOCTYPE html>
<head>
</head>
<body>
<form method="post" style="font-size: 140%;"><br>
    <label>Enter Register number:</label>
    <input type="number" name="number">
    <label>Enter CGPA:</label>
    <input type="number" step="0.001" name="cgpa">
    <input type="submit" name="submit" value="submit"><br><br>    
</form>
<?php
    if (isset($_POST["submit"])) {
    $host='localhost:3307';
    $username='root';
    $password='';
    $dbname='studentdb';
    $con=mysqli_connect($host,$username,$password,$dbname);

    
    
    $RegNo=($_POST["number"]);
    $CGPA=($_POST["cgpa"]);
    
    $sql="UPDATE student SET CGPA='$CGPA' WHERE RegNo='$RegNo'";
    $res=mysqli_query($con,$sql);

if($res){
echo "Table updated successfuly<br>";
}
}
?>
</body>
</html>