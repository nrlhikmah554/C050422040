<?php
session_start();

// Daftar user dan password yang diperbolehkan
$users = [
    'johan' => 'bengbeng123',
    'user2' => 'password2', // Tambahkan user dan password lain di sini
    // ...
];

if (isset($_POST['Login'])) {
    $username = $_POST['nama'];
    $password = $_POST['pass'];

    if (empty($username) || empty($password)) {
        echo "User Name dan Password masih kosong";
    } else {
        if (isset($users[$username]) && $users[$username] === $password) {
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $username;
            header("location: submit_formlogin.php");
            exit();
        } else {
            echo "User Name atau Password salah";
        }
    }
}
?>

<html>
<head>
<title>Session</title>
</head>
<body>
<form name="session" method="POST" action="">
    <p>Form Login</p>
    <p>User Name <input type="text" name="nama"/></p>
    <p>Password <input type="password" name="pass" /></p>
    <input type="submit" name="Login" value="Login" />
</form>
</body>
</html>