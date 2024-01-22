<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Simple Library Management System</h2></center>
    <br>
 
    <?php
        
//Establishing connection with the database
define('DB_SERVER', 'localhost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'books'); //where books is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 
        $isbn=$_POST['isbn'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $edition=$_POST['edition'];
        $publication=$_POST['publication'];
 
        $query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <h3> Book information is inserted successfully </h3>
 
    <a href="SearchBooks.php"> To search for the Book information click here </a>
 
</body>
</html>