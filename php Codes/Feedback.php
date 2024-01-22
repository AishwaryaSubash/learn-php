<!--Feedback.php-->
<?php
if (isset($_POST['submit'])) {
   $check_list = $_POST["browser"];
   $rate = $_POST["rate"];
   $gen = $_POST["gen"];
   $name = $_POST["name"];
   $list = "";
   foreach ($check_list as $i) {
       $list .= " " . $i . " ";
   }

   $com = $_POST["comm"];
   $servername = "localhost:3307";
   $username = "root";
   $password = "";
   $dbname = "timetable2";
   $conn = mysqli_connect($servername, $username, $password, $dbname);

   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   $sql = "INSERT INTO feedback (name_,gender,rate,browser,com) VALUES ('$name', '$gen', '$rate', '$list', '$com')";
   
   if (mysqli_query($conn, $sql)) {
       echo "Response submitted Successfully ";
       echo "<h1>Thanks for your time!</h1>";
       echo "<form>name: <input type=\"text\" name=\"xyz\"><input type=\"submit\"></form>";
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>
