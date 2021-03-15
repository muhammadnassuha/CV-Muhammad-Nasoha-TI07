<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav> <br>

    <form method="GET" action="form_nilai.php">
    
        <div class="form-group">
            <label for="exampleInputEmail1">Nim</label>
            <input type="text" class="form-control" name="nim" id="exampleInputEmail1" style="size: 20px;" aria-describedby="emailHelp" placeholder="Masukkan Nim">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mata Kuliah</label>
            <select class="form-control" id="exampleFormControlSelect1" name="matkul">
                <option value="DDP">Dasar-Dasar Pemrograman</option>
                <option value="BDI">Basis Data I</option>
                <option value="WEB1">Pemrograman Web</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nilai UTS</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nilai_uts" aria-describedby="emailHelp" placeholder="Masukan Nilai UTS">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nilai UAS</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nilai_uas" aria-describedby="emailHelp" placeholder="Masukan Nilai UAS">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nilai Praktikum</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nilai_tugas" aria-describedby="emailHelp" placeholder="Masukan Nilai Praktikum">
        </div>
        <button type="submit" name="proses" value="simpan" class="btn btn-primary">Submit</button>
    </form>
</body>
<?php

$proses = $_GET['proses'];
$nim = $_GET['nim'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

require_once('array_siswa.php');

?>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>