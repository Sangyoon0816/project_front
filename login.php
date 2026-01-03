<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 페이지</title>
</head>
<body>
    <h1>로그인 페이지</h1>
    <form action = './login_process.php' enctype = 'multipart/form-data' method = 'post'>
        사용자 ID :<input type = 'text' name = 'uid'><br>
        사용자 PW :<input type = 'text' name = 'upw'><br>
        <input type = 'submit' value= "엽력완료">
    </from>
</body>
</html>