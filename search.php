<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주소록 검색하기</title>
</head>
<body>
    <a href='./input.php'>[주소록 입력하기]</a>
    <a href='./search.php'>[주소록 검색하기]</a>
    <h1>주소록 검색하기</h1>
    <form action = 'process.php' enctype = 'multipart/form-data' method = 'post'>

        성별 <br>
        <select name = 'gender' size = 1>
        <option value = 'all'>모두 다 </option>
        <option value = 'female'>남자 </option>
        <option value = 'male'>여자 </option>

        </select>
        <input type = 'submit' value= "엽력완료">
    </form>
</body>
</html>