<?php
$m_fruits = [
  [ "ID" => "1", "Nama" => "Pisang", "color" => "Kuning", "stock" => 35, "price" => 28000, "description" => "Pisang adalah buah yang biasa dikonsumsi oleh seorang yang sedang diet"],
  [ "ID" => "2", "Nama" => "Semangka", "color" => "Merah dan Kuning", "stock" => 18, "price" => 36000, "description" => "Semangka adalah buah yang ukuran nya cukup besar dan sangat manis"],
  [ "ID" => "3", "Nama" => "Lemon", "color" => "Kuning", "stock" => 57, "price" => 18000, "description" => "Lemon adalah buah dengan rasa yang cukup asam tetapi baik umtuk kesehatan"],
  [ "ID" => "4", "Nama" => "Alpukat", "color" => "Hijau", "stock" => 34, "price" => 55000, "description" => "Buah alpukat berwarna hijau, biasa nya sering dikonsumsi menjadi jus buah"],
  [ "ID" => "5", "Nama" => "Nanas", "color" => "Kuning", "stock" => 25, "price" => 12000, "description" => "Nanas adalah buah yang dikenal memiliki sebuah mahkota"],
  [ "ID" => "6", "Nama" => "Jeruk", "color" => "Oren", "stock" => 50, "price" => 25000, "description" => "jeruk mempunyai rasa manis dan terkadang juga asam"],
  [ "ID" => "7", "Nama" => "Belimbing", "color" => "Kuning", "stock" => 46, "price" => 17000, "description" => "Belimbing adalah buah dengan bentuk yang sangat unik dan memiliki rasa yang cukup asam"],
  [ "ID" => "8", "Nama" => "Jambu biji", "color" => "Merah muda", "stock" => 50, "price" => 12000, "description" => "Jambu biji adalah buah yang sering dimakan oleh anak anak sd"],
  [ "ID" => "9", "Nama" => "Anggur", "color" => "Ungu", "stock" => 38, "price" => 30000, "description" => "Buah anggur yang bentuk nya menyerupai telur puyuh yaitu bulat dan sedikit lonjong"],
  [ "ID" => "10", "Nama" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 29000, "description" => "Melon adalah buah yang banyak di gemari oleh orang orang"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>

        <?php
         foreach ($m_fruits as $fruit) {
          ?>
          <tr>

          <td><?= $fruit["ID"] ?></td>
          <td><?= $fruit["Nama"] ?></td>
          <td><?= $fruit["color"] ?></td>
          <td><?= $fruit["stock"] ?></td>
          <td><?= $fruit["price"] ?></td>
          <td><?= $fruit["description"] ?></td>

         </tr>

         <?php
         }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>