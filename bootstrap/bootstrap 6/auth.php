<?php
defined('_VALID') or die('not allowed');

function init_login() {
        //Simulasi data account nama dan password
        $nama = 'aril';
        $pass = 'aril';
        
        if(isset($_POST['nama']) && isset($_POST['pass'])) {
                $n = trim($_POST['nama']);
                $p = trim($_POST['pass']);
        
                if(($n === $nama) && ($p === $pass)) {
                        //Jika sama, get cookie
                        $_SESSION['nama'] = $n;         
                        //redirect
        ?>
                        <script type="text/javascript">
                                document.location.href="./";
                        </script>
        <?php
                } else {
                        echo 'Nama/Password Tidak Sesuai';
                        return false;
                }
        }
}

function validate() {
        if(!isset($_SESSION['nama'])) {
?>		
		<div class="control-group">
		<div class="judul"><h2><center>Login Account</center></h2> </div>
		</div>
        <div class="inner">
				<form class="form-horizontal" action="" method="post">
				<div class="control-group">
				<center>
                <table border=0 cellpadding=7>
                <tr>
				<center>
                    <div class="controls">
                    <td><input type="text" name="nama" placeholder="Nama"/></td>
                	</div>
				</center>
				</tr>
                <tr>
					<div class="controls">
					<td><input type="password" name="pass" placeholder="Password" /></td>
					</div>
                </tr>
				<tr>
					<td><input type="checkbox" value="remember-me"> Remember me </td>
				</tr>
				<tr>
					<div class="controls">
					<td><input class="btn btn-primary" type="submit" value="Login" /></td>
					</div>
				</tr>

							
                </table>
				</center>
				
				 </div>
                </form>
        </div>
<?php
        exit;
        }
        
        if(isset($_GET['m']) && $_GET['m'] == 'logout') {
                //Hapus session
                if(isset($_SESSION['nama'])) {
                        unset($_SESSION['nama']);
                }
                //Redirect
?>
                <script type="text/javascript">
                        document.location.href="./";
                </script>
<?php
        }
}
?>