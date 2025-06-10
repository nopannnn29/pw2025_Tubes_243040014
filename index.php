<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

mysqli_query($conn, "SELECT * FROM movie")

?>

<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>

<h1>Daftar Movies</h1>

<table border="1" cellpadding="10" cellspacing="">

<tr>
    <th>No.</th>
    <th>Jenis Film</th>
    <th>Judul Film</td>
</tr>

<tr>
    <td>1</td>
    <td>Action</td>
    <td>The Dark Knight</td>
</tr>

<tr>
    <td>2</td>
    <td>Horor</td>
    <td>Pengabdi Setan</td>
</tr>

<tr>
    <td>3</td>
    <td>Komedi</td>
    <td>Agak Laen</td>
</tr>

<tr>
    <td>4</td>
    <td>Drama</td>
    <td>Dilan 1990</td>
</tr>

<tr>
    <td>5</td>
    <td>Petualangan</td>
    <td>Jurassic Park</td>
</tr>

<tr>
    <td>6</td>
    <td>Aanimasi</td>
    <td>Toys Story</td>
</tr>

<tr>
    <td>7</td>
    <td>Dokumenter</td>
    <td>Semesta</td>
</tr>

<tr>
    <td>8</td>
    <td>Thriller</td>
    <td>Pintu Terlarang</td>
</tr>

<tr>
    <td>9</td>
    <td>Romansa</td>
    <td>Titanic</td>
</tr>

</table>

</body>
</html>