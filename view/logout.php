<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <button type="submit" name="btnLogout">Yes,Logout</button>
        <button type="submit" name="cancel">No,Cancel</button>
    </form>
</body>

</html>
<?php
session_start();
if (isset($_POST['btnLogout'])) {
    unset($_SESSION['user']);
    header('location: ../index.php');
}
if (isset($_POST['cancel'])) {
    header('location: home_page.php');
}
?>