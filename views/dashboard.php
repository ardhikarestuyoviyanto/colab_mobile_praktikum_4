<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php session_start(); ?>
    <?php if(isset($_SESSION['login']['name']) && isset($_SESSION['login']['username'])){ ?>

        <p>Selamat Datang <b><?= $_SESSION['login']['name']; ?></b></p>
        <p>Anda Login Pakai Username <b><?= $_SESSION['login']['username']; ?></b></p>
        <a href="../php/Auth.php?route=logout">Klik ini</a> untuk logout

    <?php }else{ ?>

        <p>Anda Belum Login</p>
        <p>Silahkan <a href="../index.php">Klik ini</a> Untuk Login</p>

    <?php } ?>

</body>
</html>