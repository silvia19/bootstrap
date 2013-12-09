<!DOCTYPE html>
<html lang="en">
<!-- 
Algoritma :
1. Start
2. Menampilkan data berupa tabel
3. Jika ingin sorting nim, nama, dan alamat data bisa terurut sesuai dengan data yang ingin di sorting
4. Data terurut
5. End
-->
  <head>
    <meta charset="utf-8">
    <title>Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">SIAKAD</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#Biodata">Biodata</a></li>
                <li><a href="#DHS">DHS</a></li>
                <li><a href="#KHS">KHS</a></li>
                <li><a href="#KRS">KRS</a></li>
                <li><a href="#About">About</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

	<center><h2>Data Mahasiswa</h2></center>
	<center>
    <table class="table-hover" border="0" cellspacing="0" cellpadding="5" align="center">
	<thead>
    <tr bgcolor="#CCCCCC">
    <td width="50">No.</td>
    <?php
     $sort = isset($_GET['sort']) ? $_GET['sort'] : 'ASC';
     if($sort=='ASC'){
        $temp='DESC';
        $sort=$temp;
    }else{
        $temp='ASC';
        $sort=$temp;
    }
        echo '<td width="100"><center><a href="'.@$self.'?kolom=nim&&sort='.$sort.'">NIM</a></center></td>';
        echo '<td width="150"><center><a href="'.@$self.'?kolom=nama&&sort='.$sort.'">Nama</a></center></td>';
        echo '<td width="200"><center><a href="'.@$self.'?kolom=alamat&&sort='.$sort.'">Alamat</a></center></td>';
    ?>
    </tr>
	</thead>
    <?php
    require_once "./koneksi.php";
        $kolom = isset($_GET['kolom']) ? $_GET['kolom'] : '';
        if($kolom=='' || $sort==''){
        $sql='SELECT * FROM mahasiswa';
        }else{
			$sql='SELECT * FROM mahasiswa ORDER BY '.$kolom.' '.$sort;
        }
            $res = mysql_query($sql);
            $i=1;
            if($res){
				while($row=mysql_fetch_row($res)){?>
				
	<tbody border="0" cellspacing="0" cellpadding="5" bgcolor="#EFEFEF" bgcolor="#93C9FF">			
    <tr>
    <td><?php echo $i;?></td>
		<td width="100"><?php echo $row[0];?></td>
        <td width="150"><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
    </tr>
    <?php
    $i++;
    }        
    }
    ?>
	</tbody>
    </table>
	</center>
	<br>
	<br>
	      <div class="footer">
        <p>&copy; PTI"11 off D 2013</p>
      </div>

    </div> <!-- /container -->
  </body>
  
</html>
