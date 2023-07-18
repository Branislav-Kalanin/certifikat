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
$password = $_POST['password'];
$sql = "SELECT password FROM registracia Where meno='$meno'";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Overenie, či bol nájdený záznam
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // var_dump($row);
        $hashed_password = $row['password'];

        // Overenie hesla pomocou password_verify()
        if (password_verify($password, $hashed_password)) {

            session_start();
            // Store Session Data
            $_SESSION['login_user'] = $meno;  // Initializing Session with value of PHP Variable
            echo $_SESSION['login_user'];
            echo " Prihlásenie úspešné!";
            echo "<br>";
            echo '<a href="../index.php" ">Späť na hlavnú stránku </a>';
            echo "<br>";
        } else {
            echo "Nesprávne heslo!";
            echo '<a href="login.html" ">Späť na Log in </a>';
        }
    } else {
        echo "Používateľ s daným menom neexistuje!";
    }
} else {
    echo "Chyba!: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
