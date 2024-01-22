<!--dobright.php-->
<html>
<head>
    <title>DOB to Age</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])) {
  $dateOfBirth = date($_POST['dob']);
  $today = date("Y-m-d");
  $diff = date_diff(date_create($today),date_create($dateOfBirth));
  echo 'Your age is '.$diff->format('%y');
}
?>
</body>
</html>
