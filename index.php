<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Absensi Mahasiswa</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Absensi Mahasiswa</h1>

<form method="POST">

<label>Nama Mahasiswa</label>

<input type="text" name="nama" placeholder="Masukkan nama mahasiswa" required>

<label>Status Kehadiran</label>

<select name="status" required>

<option value="">-- Pilih Status --</option>

<option value="Hadir">Hadir</option>
<option value="Izin">Izin</option>
<option value="Sakit">Sakit</option>
<option value="Tidak Hadir">Tidak Hadir</option>

</select>

<button type="submit" name="submit">
Submit
</button>

</form>

<?php

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $status = $_POST['status'];

    echo "<div class='hasil'>";

    echo "<h3>Hasil Absensi</h3>";

    echo "<p><b>Nama Mahasiswa :</b> $nama</p>";

    echo "<p><b>Status :</b> $status</p>";

    // Percabangan if else

    if($status == "Hadir"){

        echo "<p class='hadir'>Anda hadir hari ini</p>";

    }else if($status == "Izin"){

        echo "<p class='izin'>Anda izin</p>";

    }else if($status == "Sakit"){

        echo "<p class='sakit'>Semoga cepat sembuh</p>";

    }else{

        echo "<p class='tidakhadir'>Anda tidak hadir hari ini</p>";

    }

    echo "</div>";

}

?>

</div>

</body>
</html>