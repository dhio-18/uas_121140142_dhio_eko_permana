<?php
include 'database.php';
include 'pbo.php';
if(!isset($_SESSION['admin'])){
    header("location:login.php");
}
$id = $_GET['id'];
$lihat = new buku($db);
$data = $lihat->read($id);


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
            <h1>Lihat Buku</h1>
                <table class="tabel">
                    <tr>
                        <td class="label">
                            <label for="judul">Judul</label>
                        </td>
                        <td class="input">
                            <input type="text" name="judul" id="judul" value="<?= $data['judul'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="penulis">Penulis</label>
                        </td>
                        <td>
                            <input type="text" name="penulis" id="penulis" value="<?= $data['penulis'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tahun_terbit">Tahun Terbit</label>
                        </td>
                        <td>
                            <input type="number" name="tahun_terbit" id="tahun_terbit" value="<?= $data['tahun_terbit'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="stok">Stok</label>
                        </td>
                        <td>
                            <input type="number" name="stok" id="stok" value="<?= $data['stok'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="kategori">Kategori</label>
                        </td>
                        <td>
                            <select name="kategori" id="kategori" disabled>
                                <option selected>Pilih</option>
                                <option value="Fiksi" <?php if($data['kategori'] == 'Fiksi'){echo 'selected';}?>>Fiksi</option>
                                <option value="Non-Fiksi" <?php if($data['kategori'] == 'Non-Fiksi'){echo 'selected';}?>>Non-Fiksi</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sinopsis">Sinopsis</label>
                        </td>
                        <td>
                            <textarea name="sinopsis" id="sinopsis" rows="10" disabled><?= $data['sinopsis'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="kirim">
                                <a href="buku.php" class="btn_blue" style="background: grey;">Back</a>
                            </div>
                        </td>
                    </tr>
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