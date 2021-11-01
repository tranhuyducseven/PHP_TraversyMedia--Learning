<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo "Day:" . " " . date('d') . "</br>";
    echo "Month:" . " " . date('m') . "</br>";
    echo "Year:" . " " . date('Y') . "</br>";
    echo "Day of week:" . " " . date('l') . "</br>";
    echo "time: " . " " . date('d-m-Y') . "</br>";
    echo date('h') . "</br>";
    echo date('h:i:s:a') . "</br>";
    $timestamp = mktime(8, 19, 2001);
   
    echo date('d/m/Y', $timestamp)."</br>";

    ?>
</body>

</html>