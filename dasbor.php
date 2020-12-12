<?php 
session_start();
if (!isset($_SESSION['id'])){
    // header('location: masuk.php');
    echo "session gada";
    echo $_SESSION['id'];
}


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Halaman Dasbor</title>
    </head>
    <body>
        <div class="container">
            <h3 class="mt-2 mb-3">Halaman Dasbor</h3>
            <p>Halo, <?php echo $_SESSION['id']; ?> </p>
            <p><a href="logout.php">Logout</a></p>
        </div>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>