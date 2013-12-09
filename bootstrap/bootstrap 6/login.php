<!DOCTYPE html>
<html>
<!--
Algoritma Program
 1. Mulai
 2. Jika session dengan nama 'nlogin' dan ber-value 'aril' ter-set maka akan tampil halaman isi data yang ada di basis data
 2. Jika session dengan nama 'nlogin' dan ber-value 'aril' belum ter-set maka akan tampil halaman login
 4. Selesai
-->
        <head>
                <style>
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
				background-color: #f5f5f5;
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
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
                }
                </style>
        </head>
        
        <body>
                <?php
                session_start();
                ini_set('display_errors', 1);
                define('_VALID', 1);
                
                //include file eksternal
                include('auth.php');
                
                init_login();
                validate();
                ?>
				<center><h3>Halaman Admin</h3></center>
                <div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
				<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#">Data Mahasiswa</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li class ="out"><a href="?m=logout">Logout</a></li>
					</ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
        </body>
</html>