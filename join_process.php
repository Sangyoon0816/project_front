<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>처리 페이지</title>
</head>
<body>
    <a href='./join.php'>[회원가입 페이지]</a>

    <h1>처리 페이지</h1>
    <?php
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $uname = $_POST['uname'];
    $uphone = $_POST['uphone'];
    
    $dir = "./image/";
    $file_name = basename($_FILES['uphoto']['name']);
    $imagepath = $dir.$file_name;
    move_uploaded_file($_FILES['uphoto']['tmp_name'], $imagepath);

    $dbcon = mysqli_connect('localhost', 'root', ''); // 데이터베이스 연결
    mysqli_select_db($dbcon, 'K-training DB'); // 데이터베이스 선택 

    $query = "insert into member values(null, '$uid', '$upw', '$uname', '$uphone', '$imagepath')"; 
    $result = mysqli_query($dbcon, $query);

    if($result){
        echo "$uname 님, 가입 신청이 완료되었습니다";
        echo "<img src = '$imagepath' width = '200'> ";
    }
    else{
        echo "알 수 없는 내용입니다";
    }

    // 파일 저장
    mysqli_close($dbcon);

    ?>
    <meta http-equiv="refresh" content="3; url = './login.php'">
    </body>
</html>