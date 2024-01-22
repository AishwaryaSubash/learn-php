<!--armstrong.php-->
<html>
<head>
    <title>Armstrong</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])) {
        $sum = 0;
        $temp = $_POST['number'];
        $count = 0;
        while ($temp != 0) {
            $count = $count + 1;
            $temp = floor($temp / 10);
        }
        $temp = $_POST['number'];
        while ($temp != 0) {
            $rem = $temp % 10;
            $cube =  pow($rem, $count);
            $sum = $sum + $cube;
            $temp = floor($temp / 10);
        }
        if ($_POST['number'] == $sum) {
            echo "It is an armstrong number";
        } else {
            echo "It is not an armstrong number";
        }
    }
    ?>
</body>
</html>
