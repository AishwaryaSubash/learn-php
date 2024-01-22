<!--db_creation.php-->
<!DOCTYPE html>
<html>
<body>
<?php
$host='localhost:3307';
$username='root';
$password='';
$dbname='studentdb';
$con=mysqli_connect($host,$username,$password,$dbname);

if($con){
echo "Database connected successfully<br>";
}

$sql="create table student(Name varchar(30),RegNo int(20),Branch varchar(20),Section varchar(2),Semester int(3),CGPA float,PhoneNo bigint(20),Address varchar(30))";
$sql1="INSERT INTO student (Name,RegNo,Branch,Section,Semester,CGPA,PhoneNo,Address) VALUES 
	('Aishwarya',7,'IT','A',03,9.3,93473882,'poonamallee,chennai'),
	('Madhumitha',51,'IT','A',03,9.1,87239452,'Alappakkam,cuddalore'),
	('Manogna',18,'IT','A',03,9.348,88657432,'Ethapur,Salem'),
	('Krithika',48,'IT','A',03,9.2,99768456,'Katpadi,Vellore'),
	('Deepa',21,'IT','A',03,8.6,81125667,'Singanallur,Coimbatore')";

$res=mysqli_query($con,$sql);
$res1=mysqli_query($con,$sql1);

if($res){
echo "Table created successfuly<br>";
}
if($res1){
echo "Data inserted successfully<br>";
}
?>
</body>
</html>