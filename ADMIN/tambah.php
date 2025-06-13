<?php
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol submit sudah bisa di tekan atau belum
if(isset($_POST["submit"])) {
//ambil data dari tiap element dari dalam form
$title = $_POST["title"];
$realese = $_POST["realese"];
$duration = $_POST["duration"];
$rating = $_POST["rating"];
$description = $_POST["description"];
$language = $_POST["language"];
$gambar = $_POST["gambar"];

//query insert data
$query = "INSERT INTO movie
               VALUES
               ('', '$title', '$realese', '$duration', '$rating', '$description', '$language', '$gambar')
               ";
           mysqli_query($conn, $queryssss);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data movie</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="">Title : </label>
                <input type="text" name="title" id="title">
            </li>
            <li>
                <label for="">Realese : </label>
                <input type="text" name="realese" id="realese">
            </li>
            <li>
                <label for="">Duration : </label>
                <input type="text" name="duration" id="duration">
            </li>
            <li>
                <label for="">Rating : </label>
                <input type="text" name="rating" id="rating">
            </li>
            <li>
                <label for="">Description : </label>
                <input type="text" name="description" id="description">
            </li>
            <li>
                <label for="">Language : </label>
                <input type="text" name="language" id="language">
            </li>
            <li>
                <label for="">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>


    </form>
</body>
</html>