<?php
include 'db_connect.php';
include 'film_ekle.php';
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


<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Öneri Sitesi</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Film Öneri Sitesi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Film Önerileri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>
    <form><div class="form-group">
    <label for="tur">Film Türü:</label>
    <select class="form-control" name="tur" id="tur">
        <option value="Tümü">Tümü</option>
        <option value="Aksiyon">Aksiyon</option>
        <option value="Drama">Drama</option>
        <option value="Komedi">Komedi</option>
        <option value="Romantik">Romantik</option>
    </select>
</div>
<div class="form-group">
    <label for="yil">Film Yılı:</label>
    <select class="form-control" name="yil" id="yil">
        <option value="Tümü">Tümü</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
    </select>
</div>
</form>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Film Önerileri</h1>
            </div>
        </div>

        <?php
        //Veritabanına bağlanma işlemi
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "film_oneri";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Veritabanından veri çekme işlemi
        $sql = "SELECT * FROM filmler";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Verileri döngü ile ekrana yazdırma işlemi
            while($row = $result->fetch_assoc()) {
                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row["adi"]. "</h5>";
                echo "<p class='card-text'>" . $row["tur"]. "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
