<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //PHP - Hàm sắp xếp cho mảng
    echo "<h3>PHP - Hàm sắp xếp cho mảng</h3>";

    echo "<h4>sort()- Sắp xếp mảng theo thứ tự tăng dần</h4>";
    $cars = array("4", "3", "9");
    sort($cars);
    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    //
    echo "<h4>rsort()- sắp xếp mảng theo thứ tự giảm dần</h4>";
    $cars = array("4", "3", "9");
    rsort($cars);
    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    //
    echo "<h4>Sắp xếp mảng (Thứ tự tăng dần), Theo Giá trị - asort()</h4>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    asort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    //
    echo "<h4>Sắp xếp mảng (Thứ tự tăng dần), Theo Key - ksort()</h4>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    //
    echo "<h4>Sắp xếp mảng (Thứ tự giảm dần), theo Giá trị - arsort()</h4>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    arsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    //
    
    echo "<h4>Sắp xếp mảng (Thứ tự giảm dần), theo Key - krsort()</h4>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    krsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>
</body>

</html>