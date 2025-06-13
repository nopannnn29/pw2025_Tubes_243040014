<?php
require 'functions.php';
$movie = query("SELECT * FROM movie");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
     <link rel="stylesheet" href="index.css" />
</head>
<body>
    
<h1>Daftar Movie</h1>

<a href="tambah.php">Tambah Data Movie</a>
<br></br>

<table border="1", cellpading="10", cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>Title</th>
    <th>Description</yh>
    <th>Realease</th>
    <th>Duration</th>
    <th>Rating</th>
    <th>Language</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $movie as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td><img src="<?= $row["gambar"] ?>" width="200"></td>
    <td><?= $row["title"]; ?></td>
    <td><?= $row["description"]; ?></td>
    <td><?= $row["release"]; ?></td>
    <td><?= $row["duration"]; ?></td>
    <td><?= $row["rating"]; ?></td>
    <td><?= $row["language"]; ?></td>

</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>
