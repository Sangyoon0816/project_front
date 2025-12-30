<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background = "./ccc.jpg" style = "background-repeat: no-repeat; background-size: cover;" >
    <center><form action = "process_test.php" method = "post">
        인원 수 : <input type = "text" name = "number_of_people" required style = "width: 100px;"><br>
        <select name = choice1 size = 1 style = "width: 100px;">
            <option> ----나이선택---- </option>
                <?php
                for ($i = 1; $i <= 100; $i++){
                    echo "<option value = $i> $i";
                }
                ?>
                </select>
                <br><input type = "submit" value = "확인">
    </center>
    </form>
</body>
</html>