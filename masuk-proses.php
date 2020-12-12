<?php 

require_once 'config/koneksi.php'; 

$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 
    $_SESSION['id'] = $row['id'];
    header('location: dasbor.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // header('location: masuk.php');
}

$conn->close();

?>