<?php
$dir = './image/'; //경로 끝에 슬래쉬 반드시 붙이기!!
$today = date("YmdHis");
$userid = 'hong';

$file_into = pathinfo($_FILES['image']['name']);
$file_type = $file_into['extension'];

$file_name = $today . $userid . '.'.$file_type;
$imagepath = $dir.$file_name;

move_uploaded_file($_FILES['image']['tmp_name'], $imagepath);

$F_size = $_FILES['image']['size'];
$result_size = number_format($f_size);

echo "첨부파일: $file_name ($result_size bytes)<br>)";
echo "<img src = '$imagepath'><br><br>";
?>