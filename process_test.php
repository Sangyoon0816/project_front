<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <?php
    $uname = $_POST['uname'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $num = ($height - 100) * 0.9;
    if ($weight >= $num) {
        echo "$uname 님 어서오세요. 다이어트가 필요합니다";
    } 
    else {
        echo "$uname 님 어서오세요. 다이어트가 필요하지 않습니다";
    }
    ?>
</body>
</html>