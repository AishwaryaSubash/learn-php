<html style="width: 100vw;height: 100vh;">

<head>
    <title>Todo</title>
    <link rel="stylesheet" href="styling.css">
</head>

<body style="width: 100vw;height: 100vh;">

    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $value = $_POST['value'];
    $remove = "false";
    if (isset($_POST['submit'])) {
        if (empty($_POST['value'])) {
            $errors = "You must fill in the task";
        } else {
            $sql = "INSERT INTO todo_list (value_,remove_) VALUES ('$value', '$remove');";
            if (mysqli_query($conn, $sql)) {
                //echo "New record created successfully <br>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    $sql = "SELECT id_,value_, remove_,done_ FROM todo_list";
    $result = mysqli_query($conn, $sql);
    if (isset($_GET['del_task'])) {
        $id = $_GET['del_task'];
        mysqli_query($conn, "UPDATE todo_list SET remove_='true' WHERE id=" . $id);
        header('location: todo.php');
    }
    if (isset($_GET['done_task'])) {
        $id = $_GET['done_task'];
        mysqli_query($conn, "UPDATE todo_list SET done_='true' WHERE id=" . $id);
        header('location: todo.php');
    }
    if (isset($_GET['undone_task'])) {
        $id = $_GET['undone_task'];
        mysqli_query($conn, "UPDATE todo_list SET done_='false' WHERE id=" . $id);
        header('location: todo.php');
    }
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<center><h2>Todos</h2></center>";
        echo"<center>";
        echo "<div class='table-div'>";
        echo "<table>";
        echo "<tr><td>Value</td><td>Done</td><td>Remove</td></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["value_"] . " - Name: " . $row["done"] . " " . $row["remove_"] . "<br>";
            if ($row["remove_"] == "false") {
                echo "<tr>";
                echo "<td>" . $row['value_'] . "</td>";
                if ($row['done_']=="false"){
                    $b=$row["id"];
                    echo "<td><a class='undone' href='todo.php?done_task=$b'>○</a></td>";
                }
                else{
                    $b=$row["id"];
                    echo "<td><a class='done' href='todo.php?undone_task=$b'>✓</a></td>";
                }
                $a = $row['id'];
                echo "<td><a href='todo.php?del_task=$a'>x</a></td>";
                echo "<tr>";
            }
        }
        echo "</table>";
        echo "</div>";
        echo"</center>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
</body>

</html>