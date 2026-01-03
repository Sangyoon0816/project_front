<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username = $_POST['username'];
    $uphone = $_POST['uphone'];
    $gender = $_POST['gender'];
    $brith = $_POST['brith'];

    // 데이터베이스 연결
    $dbcon = mysqli_connect('localhost', 'root', '');
    // 데이터베이스 선택 
    mysqli_select_db($dbcon, 'student');

    // 쿼리 준비 -> 전송
    $query = "insert into address_book values('$username', '$uphone', '$gender', '$brith')";
    $result = mysqli_query($dbcon, $query);
    if($result){
        echo "$username 님, 가입 신청이 완료";
    }
    else{
        echo "알 수 없는 내용";
    }
    // 데이터베이스 연결 해제
    mysqli_close($dbcon);
    ?>
    </body>
</html>