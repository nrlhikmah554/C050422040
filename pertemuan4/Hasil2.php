<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan username dan password yang diterima dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Contoh username dan password yang benar
    $correct_username = "username"; // Ganti dengan username yang benar
    $correct_password = "password"; // Ganti dengan password yang benar

    // Periksa apakah username dan password sesuai
    if ($username === $correct_username && $password === $correct_password) {
        echo "Login berhasil! Selamat datang, $username.";
    } else {
        echo "Login gagal. Periksa kembali username dan password Anda.";
    }
}
?>
</body>
</html>