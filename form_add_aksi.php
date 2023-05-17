<?php
include "koneksi.php";

if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $kelahiran = $_POST['tahun_lahir'].'-'.$_POST['bulan_lahir'].'-'.$_POST['tanggal_lahir'];
    $kelahiran = date('Y-m-d', strtotime($kelahiran));
    $alamat = $_POST['alamat'];
    $perguruan_tinggi = $_POST['perguruan_tinggi'];
    $jurusan = $_POST['jurusan'];
    $nim = $_POST['nim'];
    $kelamin = $_POST['kelamin'];
    $agama = $_POST['agama'];
    $hobby = $_POST['hobby'];
    $motto = $_POST['motto'];
    $unggah_foto_diri = $_FILES['unggah_foto_diri']['name'];
    $tmp = $_FILES['unggah_foto_diri']['tmp_name'];


    $sql = "INSERT INTO biodata_diri (
        nama, kelahiran, alamat, perguruan_tinggi, 
        jurusan, nim, kelamin, agama, 
        hobby, motto, unggah_foto_diri )
    VALUES('$nama','$kelahiran','$alamat','$perguruan_tinggi',
        '$jurusan','$nim','$kelamin','$agama',
        '$hobby','$motto','$unggah_foto_diri')";
    if (mysqli_query($conn,$sql)) {
        echo '<h1 class="success-message">Data Telah Berhasil Di Simpan</h1>';
    } else {
        echo '<h1 class="error-message">Something Went Wrong:' . mysqli_error($conn) . '</h1>';
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['unggah_foto_diri']['name']);
    if (move_uploaded_file($tmp, $target_file)) {
        echo '<h1 class="success-message">File berhasil diupload</h1>';
    } else {
        echo '<h1 class="error-message">File gagal diupload</h1>';
    }

}

?>

<style>
.success-message {
    color: green;
    text-align: center;
}

.error-message {
    color: red;
    text-align: center;
}

.tampil-data {
  display: flex;
  justify-content: center;
}

.tampil-data-1 {
    background-color: #4CAF50; /* Set the background color */
    border: none; /* Remove borders */
    color: white; /* Set text color to white */
    padding: 15px 32px; /* Set padding */
    text-align: center; /* Center the text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make it inline */
    font-size: 16px; /* Set font size */
    margin: 4px 2px; /* Add margin */
    cursor: pointer; /* Add cursor on hover */
    border-radius: 8px; /* Add rounded corners */
}

.tampil-data-1 a {
    color: white; /* Set link color to white */
    text-decoration: none; /* Remove underline */
}

.tampil-data-1:hover {
    background-color: #3e8e41; /* Set background color on hover */
}

</style>
        <div class="tampil-data">
        <button class="tampil-data-1"><a href="tampil_data.php">Lihat Hasil Data</a></button>
        </div>