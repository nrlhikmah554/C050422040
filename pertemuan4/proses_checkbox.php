<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <?php
echo "Hobi Anda Adalah :<br>";
if (isset($_POST['game1'])) {
echo "+ " . $_POST['game1'] . "<br>";
}
if (isset($_POST['game2'])) {
echo "+ " . $_POST['game2'] . "<br>";
}
if (isset($_POST['game3'])) {
echo "+ " . $_POST['game3'] . "<br>";
}
if (isset($_POST['game4'])) {
echo "+ " . $_POST['game4'] . "<br>";
}
?>
</body>
</html>