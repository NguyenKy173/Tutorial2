<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // declare(strict_types=1); 
    // // strict requirement
    // function setHeight(int $minheight = 50)
    // {
    //     echo "The height is : $minheight <br>";
    // }
    
    // setHeight(350);
    // setHeight(); // will use the default value of 50
    // setHeight(135);
    // setHeight(80);
    

    //Mảng lập chỉ mục PHP
    echo "<h3>Mảng lập chỉ mục PHP</h3>";
    $cars = array(" 11 ", " 12 ", " 13 ", " 14 ", " 15 ", " 16 ", " 17 ");
    echo "I like car : " . $cars[1] . $cars[2] . "<br>";

    //Lặp qua một mảng được lập chỉ mục
    echo "<h3>Lặp qua một mảng được lập chỉ mục</h3>";
    $ot = array("Vovlo", "BMW", "Toyota");
    $arrlength = count($ot);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $ot[$x];
        echo "<br>";
    }
    echo "<br>";

    //Mảng kết hợp PHP: có hai cách
    echo "<h3>Mảng kết hợp PHP</h3>";
    //Cách 1
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "42");
    echo "<br>";
    //Cách 2
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";

    //Lặp qua một mảng kết hợp
    echo "<h3>Lặp qua một mảng kết hợp</h3>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    //Mảng đa chiều
    echo "<h3>PHP - Mảng hai chiều</h3>";
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    //Chúng ta cũng có thể đặt một forvòng lặp bên trong một forvòng lặp khác để lấy các phần tử của mảng $cars 
    //(chúng ta vẫn phải trỏ đến hai chỉ số):
    echo "<h3>Chúng ta cũng có thể đặt một forvòng lặp bên trong một forvòng lặp khác để 
    lấy các phần tử của mảng cars (chúng ta vẫn phải trỏ đến hai chỉ số):</h3>";
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
      }
    ?>
</body>

</html>