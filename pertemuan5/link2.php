<?php
session_start();

if (isset($_SESSION['username'])) {
    include('header.php');
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "<a href='index.php'>Link 1</a> | <a href='link2.php'>Link 2</a> | <a href='link3.php'>Link 3</a> | <a href='logout.php'>Logout</a><br>";
    // Konten halaman Link 2 di sini
    include('footer.php');
    echo"<h3> Ini adalah isi dari halaman Link 2 </h3>";
} else {
    header('Location: index.php');
}
?>
