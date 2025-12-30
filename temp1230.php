<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>카운트</title>
</head>
<body>
    <?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $today = date("Y-M-D h:i:s", time());

    $fp = fopen("log.txt", 'a+');
    fwrite($fp, "$ip | $today \n");
    fseek($fp, 0);
    while(!feof($fp)){
        $log = fgets($fp, 2048);
        echo "$log<br>";
    }
    
    fclose($fp);
    ?>
</body>
</html>