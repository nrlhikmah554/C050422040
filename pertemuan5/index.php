<?php
session_start();

include('header.php');

if (isset($_SESSION['username'])) {
    // Jika pengguna sudah login, tampilkan halaman setelah login
    echo "Title<br><br>";
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "<a href='link1.php'>Link 1</a> | <a href='link2.php'>Link 2</a> | <a href='link3.php'>Link 3</a> | <a href='logout.php'>Logout</a><br>";
    echo "Anda telah berhasil login";
} else {
    // Jika pengguna belum login, tampilkan form login
    echo "Title<br><br>";
    
    if (isset($_SESSION['login_error'])) {
        echo $_SESSION['login_error'] . "<br><br>";
        unset($_SESSION['login_error']);
    }

    echo "<form method='POST' action='login.php'>";
    echo "Silakan Login<br><br>";
    echo "Username: <input type='text' name='username'><br>";
    echo "Password: <input type='password' name='password'><br>";
    echo "<input type='submit' value='Login'>";
    echo "</form>";
}

include('footer.php');
?>
