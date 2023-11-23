<?php
include '../config/conn.php';
session_start();

if ($_SESSION['role'] == "") {
    header("location: index.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <head>
        <h1>DAFTAR SISWA</h1>
    </head>

    <nav>
        <a href="from_tambah_siswa.php">[+] tambah siswa baru</a>
    </nav>
    <br>
    <table border="10">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>tempat lahir</th>
                <th>tanggal lahir</th>
                <th>alamat</th>
                <th>hobi</th>
                <th>cita cita</th>
                <th>jumlah saudara</th>
                <th>id kelas</th>
                <th>id agama</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $siswa['id'] . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['tmpat_lahir'] . "</td>";
                echo "<td>" . $siswa['tgl_lahir'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['honi'] . "</td>";
                echo "<td>" . $siswa['cita_cita'] . "</td>";
                echo "<td>" . $siswa['jm_saudara'] . "</td>";
                echo "<td>" . $siswa['id_kelas'] . "</td>";
                echo "<td>" . $siswa['id_agama'] . "</td>";

                echo "<td>";
                echo "<a href='controller/hapus_siswa.php?id=" . $siswa['id'] . "'>edit</a> | ";
                echo "<a href='controller/hapus_siswa.php?id=" . $siswa['id'] . "'>hapus</a>";

                echo "<tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total Siswa: <?php echo mysqli_num_rows($query) ?></p>
    <?php if (isset($_GET['status'])) : ?>
    <p>
        <?php
            if ($GET['status'] == 'sukses') {
                echo "data siswa berhasil ditambahkan";
            } else {
                echo "tambah data siswa gagal";
            }
            ?>
        <?php endif; ?>
    <form action="controller/logout.php" method="POST" class="login-username">
        <div class="input-grub">
            <button type="submit" class="btn">logout</button>
        </div>
    </form>
</body>

</html>