<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>회원가입 페이지</h1>
    <form action = './join_process.php' enctype = 'multipart/form-data' method = 'post'>
        사용자 ID :<input type = 'text' name = 'uid'><br>
        사용자 PW :<input type = 'text' name = 'upw'><br>
        이름 :<input type = 'text' name = 'uname'><br>
        전화번호 :<input type = 'text' name = 'uphone'><br>
        사진 :<input type = 'file' name = 'uphoto'><br>
        <input type = 'submit' value= "회원가입">
    </form>
</body>
</html>