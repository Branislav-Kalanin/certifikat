<?php
$servername = "localhost";
$username = "root";
$password = ""; // Heslo nesmie byt prazdne!
$dbname = "registracia";

// Vytvárame konekciu na databázu
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Kontrola konekcie
if (!$conn) {
    die("Neúspešné pripojenie do databázy: " . mysqli_connect_error());
}


// Získanie údajov z formulára
$meno = $_POST['meno'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// SQL query na ulozenie zaznamu, teda (C)REATE
$sql = "INSERT INTO registracia (meno, email, password, datum) VALUES ('$meno', '$email','$hashed_password',CURRENT_TIMESTAMP)";
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "Registrácia prebehla úspešne!";
    echo '<a href="../index.php" ">Späť na hlavnú stránku </a>';
} else {
    echo "Chyba!: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
