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

        .card {
            background-color: #ec5e0c;
            padding: 10px;
            margin-bottom: 10px;
        }

        span {
            display: inline-block;
        }

        img {
            width: 310px;
            margin-bottom: -20px;
            margin-right: 20px;
        }

        .echo-data {
            margin: 25px 0 10px 0;
            background-color: #ce1919;
            width: 500px
        }
    </style>
</head>
    <body>
        <div class="header">
            <h1>Berita Terbaru</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="index.php">Beranda</a>
            <a href="#">Artikel Kami</a>
            <a href="Tentang.html">Tentang Kami</a>
        </div>
        <div class="content">
            <div class="card">
                <span>
                    <img 
                        src="bahan/foto/vksn.jpg"
                        alt="5 Tahun Bisu dan Lumpuh Akibat Kecelakaan, Pria Klaim Sembuh Usai Vaksin Covid-19"
                    >
                </span>
                <span>
                    <p><i>Rabu, 19 Jan 2022 19:02 WIB</i></p>
                    <h2>5 Tahun Bisu dan Lumpuh Akibat Kecelakaan, Pria Klaim Sembuh Usai Vaksin Covid-19</h2>
                    <p>Seorang pria di negara bagian Jharkhand, India, yang mengalami lumpuh dan tidak bisa berbicara setelah terlibat dalam kecelakaan mobil yang tragis lima tahu lalu</p>
                    <p>ilaporkan mulai bisa berjalan dan berbicara setelah mendapatkan vaksin Covid-19</p>
                    <a href="Berita1.html"><p>baca selengkapnya...</p></a>
                </span>
            </div>
            <div class="card">
                <span>
                    <img 
                        src="bahan/foto/bola.jpg"
                        alt="Berita Timnas Indonesia - Shin Tae-yong Panggil Dua Pemain Muda PSIS Semarang"
                    >
                </span>
                <span>
                    <p><i>Minggu, 16 Jan 2022 20:28 WIB</i></p>
                    <h2>Berita Timnas Indonesia - Shin Tae-yong Panggil Dua Pemain Muda PSIS Semarang</h2>
                    <p>Dua pemain muda berbakat PSIS Semarang, Pratama Arhan dan Alfeandra Dewangga, kembali dipanggil Timnas Indonesia jelang FIFA Matchday digelar.</p>
                    <p>Sebagaimana diketahui, Pratama Arhan dan Alfeandra Dewangga menjadi pilihan utama</p>
                    <a href="Berita2.html"><p>baca selengkapnya...</p></a>
                </span>
            </div>
            <div class="card">
                <span>
                    <img 
                        src="bahan/foto/berita aprindo.jpg"
                        alt="Aprindo Sediakan Minyak Goreng Rp 14 Ribu per Liter Mulai Hari Ini"
                    >
                </span>
                <span>
                    <p><i>Rabu, 19 Jan 2022 16:41 WIB</i></p>
                    <h2>Aprindo Sediakan Minyak Goreng Rp 14 Ribu per Liter Mulai Hari Ini</h2>
                    <p>JREPUBLIKA.CO.ID, JAKARTA -- Asosiasi Pengusaha Ritel Indonesia (Aprindo) kembali mendukung implementasi program pemerintah dalam menyediakan Minyak Goreng Satu Harga bagi seluruh lapisan masyarakat</p>
                    <p>Hal itu dengan mengadakan penjualan minyak goreng seharga Rp 14 ribu per liter.</p>
                    <a href="Berita3.html"><p>baca selengkapnya...</p></a>
                </span>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <h3 style="text-align: center;"> Mari Berlangganan Disini Yaa >
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