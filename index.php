<html >
<head>
    <title></title>
</head>
<body>
<table border="10">
    <?php
    for ($m = 1; $m <= 20; $m++) {
        echo "<tr>";
        for ($h = 1; $h <= 20; $h++) {
            echo "<td>";
            echo $m * $h;
        }
        echo "<br>";
        echo "</tr>";
    };
    ?>
</table>
</body>
</html>


