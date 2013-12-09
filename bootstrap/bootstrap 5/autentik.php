<?php
        defined('_VALID') or die('Not Allowed');
        
        function init_login(){
               
                $nama = 'aril';        //inisialisasi username
                $pass = 'aril';        //inisialisasi password
                //session_start();        //fungsi untuk mulai session
                if(isset($_POST['nama']) && isset($_POST['pass'])){        //kondisi untuk mengecek nilai user dan password
                        $n = trim($_POST['nama']);
                        $p = trim($_POST['pass']);
                        
                        if(($n === $nama) && ($p === $pass)){                //kondisi mengecek input user dan password
                                if(isset($_POST['remember'])){ 
								//inisialisasi jika checkbox dicentang
                                        //jika sama,set cookie
                                        $_SESSION['login']=$n;
                                        //redireksi
                                        ?>
                                        <script type="text/javascript">
                                                document.location.href="./";
                                        </script>
                                        <?php
                                }else{
                                        $_SESSION['login']='';                                //inisialisasi jika checkbox tidak dicentang                                        
                                }
                        }else{                                                                                //teks yang ditampilkan jika inputan salah
                                echo '<h1 style="margin:10px auto;text-align:center; color:red;">nama dan password tidak sesuai</h1>';
                                return false;
                        }
                }
        }
        function validate(){
            if(!isset($_SESSION['login'])){                                        //cek ketersediaan session
        ?>
		<div class="control-group">
		<div class="judul"><h2><center>Login Account</center></h2> </div>
		</div>
        <div class="inner">
        <form class="form-horizontal" action="" method="post">
            <table border="0" cellpadding="7">
            <tr>
			<center>
                    <div class="controls">
                    <td><input type="text" name="nama" placeholder="Nama"/></td> <!-- tekboks untuk menginput username -->
                	</div>
			</center>
			</tr>
            <tr>
			<center>
			<div class="controls">
					<td><input type="password" name="pass" placeholder="Password" /></td> <!-- tekboks untuk menginput password -->
			</div>
			</center>
			</tr>
			<tr><td></td></tr>
            <tr>
			<div class="controls">
				<td><input class="btn btn-success" type="submit" value="Login" style="align : right;" /></td> 
			</div>            
            </tr>
            </table>
        </form>
        </div>
        <?php
        exit;                                        
        }
			if(isset($_GET['m']) && $_GET['m'] == 'Logout'){        //kondisi jika hyperlink logout diklik
                //kondisi untuk menghapus session
                if(isset($_SESSION['login'])){                                
                    unset($_SESSION['login']);
                    session_destroy();
                }
                        
                //redireksi halaman
        ?>
        <script type="text/javascript">
        document.location.href="./";
        </script>
        <?php
            }
        }
?>