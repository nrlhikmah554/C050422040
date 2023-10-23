<?php
session_start();

// Array yang berisi username dan password yang diperbolehkan
$allowed_users = array(
    'Ali' => 'password1',
    'Bona' => 'password2',
    'Charlie' => 'password3',
    'Dede' => 'password4',
    'Emon' => 'password5'
);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $allowed_users)) {
        if ($allowed_users[$username] === $password) {
            // Login berhasil, simpan username dalam sesi
            $_SESSION['username'] = $username;
            header('Location: index.php');
        } else {
            // Password salah
            $_SESSION['login_error'] = "Password yang dimasukkan salah";
            header('Location: index.php');
        }
    } else {
        // Username tidak terdaftar
        $_SESSION['login_error'] = "Username tidak terdaftar";
        header('Location: index.php');
    }
}
