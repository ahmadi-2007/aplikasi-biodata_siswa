<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Dashboard</title>
</head>

<body>
    <center>
        <div>
            <form action="controller/logout.php" method="POST" class="login-username">
                <h1>Selamat Datang, <?php echo $_SESSION['nama']; ?> </h1>
                <div class="input-group">
                    <button type="submit" class="btn"> Logout</button>
                </div>
            </form>
        </div>
    </center>
</body>

</html>