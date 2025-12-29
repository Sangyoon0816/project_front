<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <?php
    //$a = 3;
    //echo $a + 4
    /*$payment = 3000;
    $price = 800;
    $num = 3;
    echo "단가 : $price <br>";
    echo "지불액 : $payment <br>";
    echo "거스름 돈 : " . ($payment - ($price * $num));*/

    $weight = 71;
    $height = 175;
    $num = ($height - 100) * 0.9;
    if ($weight >= $num) {
        echo "다이어트 필요";
    } else {
        echo "필요하지 않음";
    }
    
?>
</body>
</html>