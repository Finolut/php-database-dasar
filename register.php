<?php
    include "service/database.php";
    session_start();
    $register_message ="";

    if(isset($_SESSION["is_login"])) {
        header ("location: dasboard.php");
    }

    if(isset($_POST["register"])){
        $username = $_POST ["username"];
        $password = $_POST ["password"];

        try {
            $sql = "INSERT INTO users (username, password) VALUES
            ('$username', '$password')";
    
            if($db->query($sql)){
                $register_message ="daftar akun berhasil silahkan login";
            }else{
                $register_message ="daftar akun gagal silahkan ulangi lagi";
            } 
          }  catch(mysqli_sql_exception) {
                $register_message ="username sudah digunakan";
            }
        $db->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html"?>
    <h3>daftar akun</h3>
    <i><?=$register_message ?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">daftar sekarang</button>
        <?php include "layout/footer.html"?>
    </form>
</body>
</html>