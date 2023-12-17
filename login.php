<?php
include 'database.php';
if(isset($_SESSION['admin'])){
    header("location:index.php");
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    if ($username == "" && $password == "") {
      echo"<script>alert('jangan konsongkan form input silahkan login ulang'); document.location = 'login.php';</script>";
    }elseif ($username == "") {
      echo"<script>alert('username kosong silahkan login ulang'); document.location = 'login.php';</script>";
    }elseif($password == ""){
      echo"<script>alert('password kosong silahkan login ulang'); document.location = 'login.php';</script>";
    }else {
      $login = mysqli_query($db, "SELECT * FROM admin where username='$username' AND password='$password'");
      if (mysqli_num_rows($login)) {
          $_SESSION['admin'] = mysqli_fetch_array($login);
          echo"<script>alert('login berhasil'); document.location = 'index.php';</script>";
      }else {
        echo"<script>alert('input yg anda masukan salah silahkan coba lagi'); document.location = 'login.php';</script>";
    }
  }
}elseif (isset($_POST['register'])) {
    $nama= $_POST['nama'];
    $username= $_POST['username'];
    $password= sha1($_POST['password']);

    $admin = mysqli_query($db,"SELECT * FROM admin");
    $data = mysqli_fetch_array($admin);

    if ($nama == "" || $username == "" || $password == "") {
        echo"<script>alert('jangan konsongkan form input silahkan login ulang');</script>";
    }else{
        if ($username != $data['username']) {
        mysqli_query($db, "INSERT INTO admin(nama, username, password) VALUES ('$nama','$username','$password')");
        echo"<script>alert('Registrasi Akun Berhasil'); document.location = 'login.php';</script>";
        
        }else {
            echo"<script>alert('username sudah digunakan silahkan registrasi ulang'); document.location = 'login.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/png">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="pen-title">
    <h1>Login Form</h1>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
    <div onclick="toggleFormUp()" class="toggle" id="up"><i>Sign Up</i>
    </div>
    <div onclick="toggleFormIn()" class="toggle" id="in"><i>Sign In</i>
    </div>
    <div id="signin">
        <h2>Login to your account</h2>
        <form method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Username" name="username"/>
        <input type="password" placeholder="Password" name="password"/>
        <button type="submit" name="login" value="login">Login</button>
        </form>
    </div>
    <div id="signup">
        <h2>Create an account</h2>
        <form method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Username" name="username"/>
        <input type="text" placeholder="Nama" name="nama"/>
        <input type="password" placeholder="Password" name="password"/>
        <button type="submit" name="register" value="register">Register</button>
        </form>
    </div>
    </div>
    <script>
    var signup = document.querySelector("#signup");
    var signin = document.querySelector("#signin");
    var up = document.querySelector("#up");
    var ins = document.querySelector("#in");
    var formModule = document.querySelector(".form-module");

    function toggleFormUp() {
        signin.style.display = "none";
        up.style.display = "none";
        signup.style.display = "block";
        formModule.style.height = "325px";
        formModule.style.transition = "0.1s";
        ins.style.display = "block";
    }
    function toggleFormIn() {
        signin.style.display = "block";
        up.style.display = "block";
        formModule.style.height = "268px";
        formModule.style.transition = "0.1s";
        signup.style.display = "none";
        ins.style.display = "none";
    }

    var toggleButton = document.getElementById("toggleButton"); // Ganti dengan ID yang sesuai
    toggleButton.addEventListener("click", toggleForm);
    </script>
</body>
</html>


