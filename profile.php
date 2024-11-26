 pertemuan-5
<!DOCTYPE html>
<html lang="en">

 pertemuan-6
<!DOCTYPE html>
<html lang="en">

<?php session_start();
if($_SESSION['role'] != 'user') {
    session_destroy();
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">S
 main
 main
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 pertemuan-5
    <h1>Selamat datang admin</h1>

 pertemuan-6
    <h1>Selamat datang admin</h1>

    <h1>Selamat datang <?php echo $_SESSION['name'];?></h1>
    <a href="./backend/logout.php">Logout</a>
 main
 main
</body>
</html>