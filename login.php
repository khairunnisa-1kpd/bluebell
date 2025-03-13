<html>
<head>
    <title>Pusat Gym BlueBell Johor Bahru</title>
    <style>
        /*Mengubah latar belakang keseluruhan paparan*/
        body{
            background-color:LightBlue;
            margin: 0;
            padding: 0;
        }
        /*Untuk mencantikkan paparan header*/
        .header{
           background-color:SteelBlue;
           padding-top:20px;
           padding-bottom:20px;
        }
        .header p{
           font-size:30px; 
           color:aliceblue;
           font-family: Tahoma, sans-serif;
           background-color:SteelBlue;
        }
        .header img{
            height:100px;
            float:left;
            margin-left:80px;
        }
        .lah{
            font-size:30px;
            font-weight:bold;
            font-family:Garamond;
        }
        .lah img{
             height:50px;
        }
        /*Untuk menyelaras dan menyusun kedudukan borang*/
        form{
            background-color:SteelBlue;
            font-size:20px;
            font-family:Garamond;
            color:aliceblue;
            padding-top:30px;
            padding-bottom:30px;
            margin-left:30%;
            margin-right:30%;
            border-radius:30px;
        }
        form input{
            padding-right:70px;
            padding-top:10px;
            padding-bottom:10px;
            font-size:20px;
            font-family:Arial;
            border-radius: 4px;
        }
        form p button{
            padding: 10px 40px;
            font-size: 20px;
            font-family: Arial;
            text-align: center;
            background-color: LightBlue;
            border: none;
            cursor: pointer;
            display: block;
            width: 100%;
            max-width: 200px; 
            margin: 0 auto; 
        }
        /*Untuk susunan footer*/
        .footer{
            background-color:SteelBlue;
            color:aliceblue;
            font-size: 20px;
            font-family:Garamond;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--Untuk header-->
<center>
<div class="header">
<img src="LOGO.png">
<p>Sistem Pengurusan Pusat Gym BlueBell Johor Bahru</p>
</div>
<br><br>
<div class="lah">
<img src="Taufan.png">
<br>
Log Masuk
</div>
<br><br>
<!--Untuk meletakkan borang untuk dimasukkan-->
<form method="post">
<input type="text" name="username" placeholder="Nama Pengguna">
<br>
<br>
<input type="password" name="password" placeholder="Kata Laluan">
<br>
<p><button type="submit" name="login">Log Masuk</button></p>

<?php
// Menghubungkan ke pangkalan data
session_start();
include("config.php"); 

// Mengambil data yang ada dalam pangkalan data
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

// Pengoperasian untuk memilih kata laluan yang betul
    if ($user && $password == $user['password']) { 
        $_SESSION['username'] = $username; 
        header("Location: index.php"); 
        exit();
    } else {
        echo "<script>alert('Nama pengguna atau kata laluan salah!');</script>";
    }
}
?>
</form>
<br>
<!--Ini footer-->
<div class="footer">
    Copyright ; Khaiievvnation@gmail.com | 2025
</div>
</center>
</body>
</html>