<?php
include 'database.php';
if(!isset($_SESSION['admin'])){
    header("location:login.php");
}
$buku = mysqli_query($db,"SELECT * FROM buku ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <title>Perpustakaan</title>
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">
                <img src="img/logo.jpg" alt="ini logo">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="buku.php">Daftar Buku</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container">
        <div class="cont">
            <h1>Daftar Buku</h1>
            <a href="tambah.php"><input class="btn_green" type="button" value="Tambah"></a>
            <table class="daftar_buku">
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>stok</th>
                    <th>action</th>
                </tr>
                <?php foreach ($buku as $value): ?>
                <tr>
                    <td><?php echo $value['judul'] ?></td>
                    <td><?php echo $value['penulis'] ?></td>
                    <td><?php echo $value['tahun_terbit'] ?></td>
                    <td><?php echo $value['kategori'] ?></td>
                    <td><?php echo $value['stok'] ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $value['id'] ?>"><input class="btn_blue" type="button" value="Edit"></a>
                        <a href="lihat.php?id=<?php echo $value['id'] ?>"><input class="btn_green" type="button" value="Detail"></a>
                        <a href="delete.php?id=<?php echo $value['id'] ?>"><input class="btn_red" type="button" value="Delete"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
    <footer>
        <div class="container">
            &copy; 2023 Perpustakaan Dhio. All rights reserved.
        </div>
    </footer>
</body>
</html>