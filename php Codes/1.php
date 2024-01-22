<!DOCTYPE html>
<html>
<body>
<form  method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>

<?php
  
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $target_dir = "uploads/";
  $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1; 
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file has been uploaded.";
      /* htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))*/
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
//$a = unlink("uploads/filename.ext");
 
?>  
</html>
