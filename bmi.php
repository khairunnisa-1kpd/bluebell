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
      /*Untuk menyelaras dan menyusun kedudukan borang*/
      .calc{
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
        .calc input{
            padding-right:70px;
            padding-top:10px;
            padding-bottom:10px;
            font-size:20px;
            font-family:Arial;
            border-radius: 4px;
        }
        .calc button{
            padding: 10px 30px;
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
            border-radius:5px;
        }
        p{
          background-color:skyblue;
          margin-left:10%;
          margin-right:10%;
          color:black;
          border-radius:30px;
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
<center>
     <!--Untuk header-->
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
<!--Untuk meletakkan tinggi dan berat untuk dikira-->
<h2>Kalkulator BMI</h2>
<div class="calc">
    <label>Weight (kg): <input type="number" placeholder="Masukkan Berat" id="weight"></label><br>
    <br>
    <label>Height (m): <input type="number"  placeholder="Masukkan Tinggi" id="height"></label><br>
    <br>
    <button onclick="calculateBMI()">Kira BMI</button>
    <p id="result"></p>
      </div>
<script>
    //mendeklamasikan berat ,tinggi dan hasil bmi
     function calculateBMI() {
            var weight = parseFloat(document.getElementById("weight").value);
            var height = parseFloat(document.getElementById("height").value);
            var resultText = document.getElementById("result");
 //pengiraan bmi
            if (weight > 0 && height > 0) {
                var bmi = weight / (height * height);
                var category = "";
                var message = "";

                if (bmi < 18.5) {
                    category = "Kurang berat badan";
                    message = "Tak sihat ni kurus-kurus jadi sila ambil banyak protein. Terima kasih.";
                } else if (bmi >= 18.5 && bmi < 24.9) {
                    category = "Berat badan normal";
                    message = "Alhamdulilah anda sihat sejahtera. Terima kasih.";
                } else if (bmi >= 25 && bmi < 29.9) {
                    category = "Berlebihan berat badan";
                    message = "Perlu lebih penjagaan badan sebelum mati. Terima kasih.";
                } else {
                    category = "Obesiti";
                    message = "Jagalah badanmu. Terima kasih.";
                }

                resultText.innerHTML = `Nilai BMI anda ialah: <strong>${bmi.toFixed(2)}</strong> <br> Kategori: <strong>${category}</strong> <br> ${message}`;
            } else {
                resultText.innerText = "Ni bukan game ya nak main-main. Masuk input betul-betul";
            }
        }
</script>
<!--Ini footer-->
<div class="footer">
    Copyright ; Khaiievvnation@gmail.com | 2025
</div>
</center>
</body>
</html>