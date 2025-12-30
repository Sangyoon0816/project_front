<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <?php
    /*$uname = $_POST['uname'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $num = ($height - 100) * 0.9;
    if ($weight >= $num) {
        echo "$uname 님 어서오세요. 다이어트가 필요합니다";
    } 
    else {
        echo "$uname 님 어서오세요. 다이어트가 필요하지 않습니다";
    }*/

    $number_of_people = $_POST['number_of_people'];
    $age = $_POST['choice1'];
    echo "인원수 : " . $number_of_people . "명<br>";
    echo "나이 : " . $age . "세<br>";
    if($age >= 18){
         echo "입장료는" . number_format(20000 * $number_of_people) . "원입니다.";
    }
    else if($age >= 7 && $age < 18){
         echo "입장료는" . number_format(15000 * $number_of_people) . "원입니다.";
    }
    else if($age < 7){
        echo "입장료는" . 0 . "원입니다.";
    }
    ?>
</body>
</html>