<?php session_start(); ?>
<!DOCTYPE html>
<html>
<!--
Algoritma Program
 1. Start
 2. Input Username dan Pssword
 3. Tekan Tombol Login
 4. Jika session dengan nama 'aril' dan bernilai 'aril' ter-set maka akan tampil halaman utama admin
 5. Jika session dengan nama 'aril' dan bernilai 'aril' belum ter-set maka tetap tampil halaman login dan teks peringatan
 4. End
-->
        <head>
                <title>Halaman Administrator</title>
				<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
				<style type="text/css">
				/* script css untuk mergubah warna background, warna tulisan, tata letak margin, warna border, mengedit jenis border.
				*/
				.judul{
				margin: 30px auto 20px;
				padding: 0px;
				}
				.out{
				margin: 0px auto 0px 475px;
				}
				body {
				padding-top: 40px;
				padding-bottom: 40px;
				background-color: #FFCC33;
				}
                .inner {
				margin: 20px auto 20px;
                /*margin: 200px auto;*/
                padding: 20px;
                width: 250px;
				height: 150px;

				
				background-color: #fff;
				border: 1px solid #e5e5e5;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
                border-radius: 5px;
				-webkit-box-shadow: 0 1px 2px rgba(0.5,0.1,2,.05);
				-moz-box-shadow: 0 1px 2px rgba(0.5,1,2,.05);
                box-shadow: 0 1px 2px rgba(0.5,2,0,.05);
                }
                </style>
                
        </head>

    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>

  <body>
        <?php
            ini_set('display errors',1);
            define('_VALID',1);
            // memasukkan include file eksternal
            require_once('./autentik.php');
            init_login();                //fungsi untuk mengecek username dan passsword yang diinput
            validate();                        // fungsi untuk menampilkan login jika session kosong atau perintah logout jika session tidak kosong
        ?>
    <div class="container">

      <div class="masthead">
		<h2 class="muted">Informasi Mahasiswa</h2>
            <div style="text-align:right">
                        <a href="?m=Logout">Logout</a>
            </div>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="#Home">Home</a></li>
                <li><a href="#Biodata">Biodata</a></li>
                <li><a href="#KRS">KRS</a></li>
                <li><a href="#KHS">KHS</a></li>
                <li><a href="#DHS">DHS</a></li>
                <li><a href="#About">About</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Update Informasi</h1>
        <p class="lead">Selalu Update Informasi Mahasiswa agar Perkuliahan bisa berjalan dengan lancar yang disertai KRS, KHS, DHS, dan Jadwal Perkuliahan</p>
        <a class="btn btn-large btn-success" href="#Get_started">Get started</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Biodata</h2>
          <p>Ketahui biodata anda yang terdiri dari nama, kelas, prodi, jurusan dan status registrasi anda. </p>
          <p><a class="btn" href="#Biodata">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>KHS</h2>
          <p>Ketahui nilai IP untuk setiap semesternya pada tiap-tiap matakuliah anda. </p>
          <p><a class="btn" href="#KHS">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>KRS</h2>
          <p>Ambil mata kuliah yang sudah disediakan untuk setiap semesternya, lihat list mata kuliah tambahan yang mau diambil dan ketahui jadwal matakuliah yang sudah diambil serta antrian dalam mengambilnya.</p>
          <p><a class="btn" href="#KRS">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Universitas Negeri Malang 2013</p>
      </div>

    </div> <!-- /container -->
	<?php
		//untuk mengatasi nilai session
        if($_SESSION['login']==''){                        //hapus session jika checkbox tidak dicentang
            unset($_SESSION['login']);
            session_destroy();
            exit;
        }
    ?>
  </body>
</html>