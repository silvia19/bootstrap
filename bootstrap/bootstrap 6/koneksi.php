<?php
// Catatan:
// Jika perlu, sesuaikan nama user dan password
$host = 'localhost'; //nama server
$user = 'root'; // nama user
$pass = ''; //password
$db = 'myweb'; //nama basis data
$cnn = mysql_connect($host, $user, $pass);
if (!$cnn) { //kondisi jika koneksi gagal
exit('Koneksi Gagal');
}
$db = mysql_select_db($db);
if (!$db) { //kondisi jika tidak ada basis data yang terpilih
exit('Gagal Memilih Database');
}
?>