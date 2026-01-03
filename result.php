<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href='./input.php'>[주소록 입력하기]</a>
    <a href='./search.php'>[주소록 검색하기]</a>
    <h1>주소록 검색하기</h1>
    <?php
    $uname = $_POST['uname'];
    $gender = $_POST['gender'];

    $dbcon = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbcon, 'student');

    if($uname and $gender != 'all'){
        $query = "select * from address_book where username like '%$uname%' and gender ='$gender'";
    }
    else if($uname and $gender == 'all'){
        $query = "select * from address_book where username like '%$uname%'";
    }
    else if($uname and $gender != 'all'){
        $query = "select * from address_book where gender = '$gender'";
    }
    else{
         $query = "select * from address_book";
    }

    $result = mysqli_query($dbcon, $query);

    while($row = mysqli_fetch_array($result)){
        echo $row['username']."<br>";
        echo $row['phone_number']."<br>";
        echo $row['gender']."<br>";
        echo $row['brith']."<br>";
    }
    // 데이터베이스 연결 해제
    mysqli_close($dbcon);
    ?>
</body>
</html>