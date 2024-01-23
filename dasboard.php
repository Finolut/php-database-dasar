<?php
    session_start();

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location: index.php");
    }
?>
 


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php include  "layout/header.html"?>

<h3>SELAMAT DATANG <?= $_SESSION["username"]?></h3>

<?php include  "layout/footer.html"?>

<form action="dasboard.php" method="POST">
    <button type="submit" name="logout">log out</button>
</form>

</body>
</html>