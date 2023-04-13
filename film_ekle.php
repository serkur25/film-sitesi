<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Film Ekle</title>
</head>
<body>
  <h1>Film Ekle</h1>

  <form action="film_kaydet.php" method="POST">
    <label for="film_adi">Film Adı:</label>
    <input type="text" name="film_adi" id="film_adi"><br>

    <label for="film_aciklama">Film Açıklama:</label>
    <textarea name="film_aciklama" id="film_aciklama"></textarea><br>

    <input type="submit" value="Ekle">
  </form>
</body>
</html>
