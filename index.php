<?php
include 'database.php';
if(!isset($_SESSION['admin'])){
    header("location:login.php");
}
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
                    <?php
                    if (isset($_SESSION['admin'])) {
                    ?>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <?php
                    }else{
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container">
        <div class="main_content">
            <h1>Selamat Datang Admin</h1>
            <div class="content">
                <p>Mari menjelajahi dunia pengetahuan yang tak terbatas melalui koleksi buku-buku berkualitas yang telah kami sediakan. Dengan semangat membaca, kita dapat menggali lebih dalam, belajar lebih banyak, dan memperkaya pemikiran kita.</p>
                <p>Perpustakaan kami bukan hanya sekadar tempat untuk menyimpan buku, tetapi juga menjadi wadah untuk pertukaran ide, inspirasi, dan pengetahuan. Kami hadir untuk melayani kebutuhan literasi dan penelitian Anda.</p>
                <p>Temukan berbagai genre, penulis terkenal, dan topik menarik dalam koleksi kami. Jadikan perpustakaan ini sebagai teman setia dalam petualangan literasi Anda. Kami percaya bahwa setiap buku adalah jendela ke dunia baru, dan di sini, Anda dapat membuka jendela-jendela itu tanpa batas.</p>
                <p>Ayo bergabunglah dengan komunitas pembaca kami, saling berbagi pengetahuan, dan menciptakan lingkungan yang merayakan keajaiban kata-kata. Terima kasih telah memilih perpustakaan ini sebagai sumber daya utama Anda untuk membuka wawasan dan mengembangkan kreativitas.</p>
                <p>Selamat menikmati perjalanan literasi Anda di Perpustakaan ini!</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            &copy; 2023 Perpustakaan Dhio. All rights reserved.
        </div>
    </footer>
</body>
</html>