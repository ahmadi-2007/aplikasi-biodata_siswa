<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>documen</title>
</head>

<body>
    <div class="container">
        <form action="controller/register.php" method="POST" class="login-username">
            <center>
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            </center>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <select name="role" class="role" require>
                    <option value="" disabled selected>Pilih Role dari User</option>
                    <option value="admin">Admin</option>
                    <option value="operator">petugas</option>
                    <option value="operator">siswa</option>
                </select>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <div>
                <p class="login-register-text">Sudah Punya Akun? <a href="index.php">Login</a> </p>
            </div>
        </form>
    </div>
</body>

</html>