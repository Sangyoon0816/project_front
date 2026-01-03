<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 처리 페이지</title>
</head>
<body>
    <?php
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $dbcon = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbcon, 'K-training DB');
    $query = "select * from member where uid = '$uid'";
    $result = mysqli_query($dbcon, $query);

    $row = mysqli_fetch_array($result);
    if(isset($row)){
        if($row['upw'] == $upw){
            echo "아이디 비번 모두 일치";
            // 세션 발급
            $_SESSION['userid'] = $row['uid'];
            echo "<script>location.replace('./content.php')</script>";
            // 회원 전용 페이지로 이동
        }
        else{
            echo "로그인 실패";
            //echo "<meta http-equiv='refresh' content='1; URL=./login.php'>";
        }
    }
    else{
        echo "로그인 실패";
        //echo "<meta http-equiv='refresh' content='1; URL=./join.php'>";
    }
    ?>
</body>
</html>