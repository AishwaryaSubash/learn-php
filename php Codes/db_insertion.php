<!--db_insertion.php-->
<!DOCTYPE html>
<html>
<head>
<style>
td,th{
padding: 15px;
}
</style>
</head>
<body>
<form method="post" style=”font-size=140%;”>
<br>Enter Register number:
<input type="number" name="number">
<input type="submit" value="submit"><br><br>
</form>
<?php
$host='localhost:3307';
 $username='root';
 $password='';
 $dbname='studentdb';
$con=mysqli_connect($host,$username,$password,$dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$RegNo=($_POST["number"]);
 $sql="SELECT * FROM student WHERE RegNo='$RegNo'";
 $res=mysqli_query($con,$sql);
 echo "<table border='1'>
<tr>
<th>Name</th>
<th>RegNo</th>
<th>Branch</th>
<th>Section</th>
<th>Semester</th>
<th>CGPA</th>
<th>Phone No</th>
<th>Address</th>
</tr>";
 while($row=mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['RegNo']."</td>";
echo "<td>".$row['Branch']."</td>";
echo "<td>".$row['Section']."</td>";
echo "<td>".$row['Semester']."</td>";
echo "<td>".$row['CGPA']."</td>";
echo "<td>".$row['PhoneNo']."</td>";
echo "<td>".$row['Address']."</td>";
echo "</tr>";
 }
 echo "<table>";
 mysqli_close($con);
}
?>
</body>
</html>