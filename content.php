<?php
session_start();
if(isset($_SESSION['userid'])){
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='UTF-8'>
    <title>테스트</title>
    </head>
    <body>
    <h1>회원 전용 페이지</h1>
    <img src = './image/ccc.jpg' width = '200'>
    </body>
    </html>
    ";
}
else{
    echo "Access Denied";
}
?>
