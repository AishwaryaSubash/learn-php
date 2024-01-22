<html>

<head>
    <title>Todo form</title>
    <link rel="stylesheet" href="styling.css">
</head>
</head>

<body>
    <center>
        <h2>Add Todo</h2>
    </center>

    <div class="form-div">
        <form action="todo.php" method="post" target="right">
            <div class="label-form">
                <label>
                    Enter Todo : <input type="text" name="value" id="Form">
                    <input type="submit" name="submit" value="Add Todo">
                </label>
                <button name="submit" onclick="myFunction();">Refresh</button>
            </div>
        </form>
    </div>
    <script>
        function myFunction() {
            document.getElementById("Form").value='';
        }
    </script>

</body>

</html>