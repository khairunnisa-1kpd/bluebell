<?php
// Menghubungkan ke pangkalan data
    include("config.php");
// Mengambil data yang ada dalam pangkalan data
    if (isset($_POST['submit'])){
      $name=$_POST['name'];
      $ic=$_POST['ic'];
      $age=$_POST['age'];
      $gender=$_POST['gender'];
//Memasukkan data dari borang ke pangkalan data
      $query=mysqli_query($conn,"INSERT INTO members SET 
      name='".$name."',
      ic='".$ic."',
      age='".$age."',
      gender='".$gender."'");
// Arah paparan seterusnya
    header("location:index.php");
    exit();
  }
  ?>
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
        /*Untuk menyusun kedudukan navigasi sistem*/
        .navigation{
        background-color:skyblue;
      }
      .navigation ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        }
      .navigation li{
        float:left;
      }
      .navigation a{
        display: block;
        padding: 10px;
        padding-left:220px;
        color:black;
        text-decoration:none;
      } 
      .register p{
            font-size:20px;
            font-weight:bold;
            font-family:Garamond;
      }
      /*Untuk menyelaras dan menyusun kedudukan borang*/
      form {
              background-color: SteelBlue;
              font-size: 20px;
              font-family: Garamond;
              color: aliceblue;
              padding: 30px;
              margin: auto;
              width: 40%;
              border-radius: 30px;
              display: flex;
              flex-direction: column;
              gap: 15px;
          }

          .form-group {
              display: flex;
              align-items: center;
              justify-content: space-between;
              width: 100%;
          }

          form label {
              width: 35%;  
              text-align: left;
          }

          form input, form select {
              flex-grow: 1;
              padding: 10px;
              border: 1px solid #ccc;
              border-radius: 4px;
              font-size: 18px;
              font-family: Arial;
          }
/*MMengubah bentuk butang yang ada pada halaman*/
          .buthang {
                width: 100%;
                display: flex;
                justify-content: center;
                margin-top: 10px; 
            }

            form button {
                padding: 10px 20px;
                font-size: 20px;
                font-family: Arial;
                background-color: LightBlue;
                border: none;
                cursor: pointer;
                border-radius: 5px;
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
<!--Untuk navigasi-->
<div class="navigation">
        <ul>
            <li><a href="index.php">Menu Utama</a></li>
            <li><a href="add.php">Pendaftaran Ahli</a></li>
            <li><a href="bmi.php">Kira BMI</a></li>
            <li><a href="login.php">Log Keluar</a></li>
        </ul>
</div>
<br>
<br>
<!--Untuk meletakkan borang untuk dimasukkan-->
<div class="register">
    <p>Pendaftaran Ahli Baharu</p>
    <form method="post" action=""> 
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" placeholder="Masukkan nama">
        </div>

        <div class="form-group">
            <label for="ic">No. Kad Pengenalan:</label>
            <input type="text" name="ic" placeholder="Masukkan no.kp (tanpa '-')">
        </div>

        <div class="form-group">
            <label for="age">Umur:</label>
            <input type="text" name="age" placeholder="Masukkan umur">
        </div>

        <div class="form-group">
            <label for="gender">Jantina:</label>
            <select name="gender">
                <option value="" disabled selected hidden>Pilih Jantina</option>
                <option>Lelaki</option>
                <option>Perempuan</option>
                <option>Khunsa</option>
            </select>
        </div>
    <!--butang untuk ke index.php-->
        <div class="buthang">
            <button type="submit" name="submit">Daftar</button>
        </div>
    </form>
</div>
</form>
</div>
    <!--Ini footer-->
<div class="footer">
    Copyright ; Khaiievvnation@gmail.com | 2025
</div>
</center>
</body>
</html>