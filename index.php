<html>
<head>
    <title>Pusat Gym BlueBell Johor Bahru</title>
    <style>
        /*Mengubah latar belakang keseluruhan paparan*/
        body {
            background-color: LightBlue;
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
           padding-left:186px;
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
      .gambar img{
        width:100%;
        height:300px;
      }
      .gambar marquee{
        font-size:30px;
        margin-top:20px;
        font-family: Garamond;
      }
      /*Menyusun paparan informasi*/
        .info1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px;
        }
        .info1 p {
            width: 50%;
            font-size: 20px;
            font-family: Garamond;
            text-align: left;
        }
        .info1 img {
            width: 800px;
            height: 200px;
        }
        .bmi {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px;
        }
        .bmi p {
            width: 50%;
            font-size: 20px;
            font-family: Garamond;
            text-align: right;
        }
        .bmi img {
            width: 800px;
            height: 200px;
        }
        /*MMengubah bentuk butang yang ada pada halaman*/
        .butangh {
            width: 100%;
            text-align: center;
            margin-top: 10px;
        }
        .butangh button {
            padding: 10px 20px;
            font-size: 20px;
            font-family: Arial;
            background-color: skyblue;
            border: solid thin;
            cursor: pointer;
            border-radius: 5px;
            padding-bottom:10px;
        }
        .butangh a {
            color: black;
            text-decoration: none;
        }
        /*Untuk susunan footer*/
        .footer {
            background-color: SteelBlue;
            color: aliceblue;
            font-size: 20px;
            font-family: Garamond;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
<center>
    <!--Untuk header-->
    <div class="header">
        <img src="LOGO.png" alt="Gym Logo">
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
    <!--Masukkan semua informasi-->
    <br>
    <div class="gambar">
    <img src="imej2.jpg">
    <br>
    <marquee>Selamat datang ke Pusat Gym BlueBell Johor Bahru</marquee>
    </div>
    <br>
    <div class="info1">
        <p>Pusat gym adalah tempat yang menyediakan kemudahan dan peralatan untuk senaman dan kecergasan.
            Ia biasanya dilengkapi dengan pelbagai peralatan seperti treadmill, basikal senaman, dumbbell, mesin angkat berat,
            serta ruang untuk latihan kardiovaskular dan kekuatan. Selain itu, pusat gym sering menawarkan kelas kecergasan
            seperti yoga, aerobik, dan latihan HIIT, serta khidmat jurulatih peribadi untuk membantu individu mencapai matlamat
            kesihatan dan kecergasan mereka.</p>
        <img src="imej1.jpg" alt="Gym Image">
    </div>
    <!--Senarai jadual dari pangkalan data-->
    <h2>Senarai Ahli Pusat Gym BlueBell Johor Bahru</h2>
    <table width="50%" border="2">
        <tr>
            <th bgcolor="#87CEEB">NAMA</th>
            <th bgcolor="#87CEEB">UMUR</th>
            <th bgcolor="#87CEEB">JANTINA</th>
        </tr>
        <?php
        // Menghubungkan ke pangkalan data
            include "config.php";
            // Mengambil data yang ada dalam pangkalan data
            $query = "SELECT * FROM members ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = htmlspecialchars($row['name']);
                    $age = htmlspecialchars($row['age']);
                    $gender = htmlspecialchars($row['gender']);
                    echo "<tr>
                        <td align='center' bgcolor='#4682B4' style='color:#F0F8FF;'>$name</td>
                        <td align='center' bgcolor='#4682B4' style='color:#F0F8FF;'>$age</td>
                        <td align='center' bgcolor='#4682B4' style='color:#F0F8FF;'>$gender</td>
                    </tr>";
                }
            }
        ?>
    </table>
        <!--Butang untuk ke add.php-->
    <div class="butangh">
        <p>Anda mahu menjadi ahli Pusat Gym BlueBell Johor Bahru? Klik butang di bawah sekarang juga!!</p>
        <button type="button"><a href="add.php">Daftar Sekarang!!</a></button>
    </div>
    <div class="bmi">
        <img src="imej3.jpg" alt="Gym Image">
        <p>BMI (Body Mass Index) adalah suatu ukuran yang digunakan untuk menilai apakah 
            berat badan seseorang itu kurus, normal, berlebihan berat badan, atau obesiti berdasarkan perbandingan antara 
            berat badan dan tinggi badan.</p>
    </div>
    <!--Butang untuk ke bmi.php-->
    <div class="butangh">
        <p>Mari lihat hasil BMI anda !</p>
        <button type="button"><a href="bmi.php">Kalkulator BMI</a></button>
    </div>
    <br><br><br>
    <!--Ini footer-->
    <div class="footer">
        Copyright &copy; 2025 | Khaiievvnation@gmail.com
    </div>
</center>
</body>
</html>