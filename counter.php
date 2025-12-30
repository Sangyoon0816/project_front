<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>카운터</title>
</head>
<body>
    <?php
    $fp = fopen("record.txt", 'r+');
    $count = fgets($fp, 4096);
    echo "당신은 $count 번째 사용자입니다";
    $count++;
    fseek($fp, 0);
    fwrite($fp, $count);
    fclose($fp);
    ?>
    </body>
</html>