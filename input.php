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
    <h1>주소록 입력하기</h1>
    <form action = 'process.php' enctype = 'multipart/form-data' method = 'post'>
        이름 :<input type = 'text' name = 'username'><br>
        전화 :<input type = 'text' name = 'uphone'><br>
        성별 <br>
        <input type = 'radio' name = 'gender' value = 'female' checked>여성<br>
        <input type = 'radio' name = 'gender' value = 'male' checked>남성<br>
        생년월일 <input type = 'text' name = 'brith'><br><br>
        <input type = 'submit' value= "엽력완료">

    </form>
</body>
</html>