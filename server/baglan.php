<?php
ob_start();
session_start();
error_reporting(0);

$host = 'localhost';
$kullanici = 'root';
$sifre = '';
$db_isim = 'maskot';

$conn = new MySQLi($host, $kullanici, $sifre, $db_isim);
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
	die('Veritabanı bağlantı hatası lütfen Maskot ile iletişime geç. : ' . $conn->connect_error);
}

/*else {
    echo ("Bağlantı başarılı kanka.");
}
<?php
	$conn=mysqli_connect("localhost", "root", "", "maskot");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>*/