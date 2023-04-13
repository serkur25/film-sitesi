<?php
$host = "localhost"; // veritabanı sunucusu
$dbname = "film_onerileri"; // veritabanı adı
$username = "root"; // veritabanı kullanıcı adı
$password = ""; // veritabanı şifresi

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  // PDO sınıfı kullanarak veritabanına bağlanma
} catch(PDOException $e) {
  die("Veritabanı bağlantısı sağlanamadı: " . $e->getMessage());
}
?>
