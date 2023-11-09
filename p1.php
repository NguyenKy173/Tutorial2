<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Đối số hàm PHP
    function familyName($frame)
    {
        echo "$frame  Resfsnes.<br>";
    }
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    echo "<br>";
    ?>

    <?php
    // //strict bố buộc mọi thứ phải được sử dụng theo cách đã định.
    // echo "<h3>Sử dụng straict</h3>";
    
    ?>
</body>

</html>