<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terbaru.com</title>
    <link rel="stylesheet" type="text/css" href="bahan/data/layout.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .greeting {
            text-align: center;
            background-color: #f00f0f;
            color: #f8f8f8;
            margin: -20px -20px 20px -20px;
            padding: 100px 0 100px 0;
        }

        .greeting a {
            color: #c9ff07;
        }

        .span-2 {
            display: inline-block;
        }

        .span-2 img {
            width: 433px;
        }
        
        .card {
            background-color: #741d1d;
            padding: 10px;
            margin-bottom: 10px;
        }

        .echo-data {
            margin: 25px 0 10px 0;
            background-color: #0f086d;
            width: 500px
        }
    </style>
</head>
    <body>
        <div class="header">
            <h1>Berita Terbaru.com</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="#">Beranda</a>
            <a href="article.php">Artikel Kami</a>
            <a href="Tentang.html">Tentang Kami</a>
        </div>
        <div class="content">
            <div class="greeting">
                <h1>Hai, Selamat Datang Di Berita Terbaru </h1>
                <p>Cari Berita Ter Update?Yaaa Di Berita Terbaru.com</p>
                <br>
                <h2>Klik pada 
                    <a href="article.php">
                        Ayo Baca !
                    </a>
                !</h2>
            </div>
            <span>
                <a href="Berita1.html">
                    <img 
                        src="bahan/foto/vksn.jpg"
                        alt="5 Tahun Bisu dan Lumpuh Akibat Kecelakaan, Pria Klaim Sembuh Usai Vaksin Covid-19"
                        style="width: 872px;"
                    >
                </a>
            </span>
            <span class="span-2">
                <a href="Berita2.html">
                    <img 
                        src="bahan/foto/bola.jpg"
                        alt="Berita Timnas Indonesia - Shin Tae-yong Panggil Dua Pemain Muda PSIS Semarang"
                    >
                </a>
                <br>
                <a href="Berita3.html">
                    <img 
                        src="bahan/foto/berita aprindo.jpg"
                        alt="Aprindo Sediakan Minyak Goreng Rp 14 Ribu per Liter Mulai Hari Ini"
                    >
                </a>
            </span>
        </div>
        <div class="content">
            <div class="card">
                <h3 style="text-align: center;">Daftar Jika Ingin Berlangganan</h3>
                <table align="center">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <tr>
                            <td><label>Nama: </label></td>
                            <td><input type="text" name="fnama"></td>
                        </tr>
                        <tr>
                            <td><label>Email: </label></td>
                            <td><input type="email" name="femail"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </form>
                </table>
                <center>
                    <div class="echo-data">
                        <?php 
                            if(isset($_POST ['fnama'])){
                                $nama = $_POST['fnama'];
                                $email =$_POST['femail'];

                                echo "<b>Nama: </b> $nama, <b>Email: </b> $email";
                            }
                        ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="footer">
            <h3>Copyright &copy; <script>document.write(new Date().getFullYear())</script> by Daily News. All Rights Reserved.</h3>
        </div>


        <script>
            window.onscroll = function() {myFunction()};

            var header = document.getElementById("topnav");
            var fixed = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > fixed) {
                    header.classList.add("fixed");
                } else {
                    header.classList.remove("fixed");
                }
            }
        </script>
    </body>
</html>