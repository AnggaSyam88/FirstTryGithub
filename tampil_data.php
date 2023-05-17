<?php
$conn = mysqli_connect("localhost", "root", "", "webku");
$statistik = query("SELECT * FROM biodata_diri");

function query($data) {
    global $conn;

    $hasil = mysqli_query($conn, $data);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }

    return $rows;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Kumpulan Data</title>
    <style>
         table {
          border-collapse: collapse;
          width: 100%;
          margin-bottom: 20px;
        }

        th, td {
          text-align: left;
          padding: 8px;
          border: 1px solid #ddd;
        }

        th {
          background-color: #4CAF50;
          color: white;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Hasil Data</h1>
    <table border = 1 cellpadiing = 10 cellspacing = 0>
        <tr>
            <th>No.</th>    
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Perguruan Tinggi</th>
            <th>Jurusan</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Hobby</th>
            <th>Motto</th>
            <th>Foto Diri</th>
        </tr>

    <?php $y = 1 ?>
    <?php foreach($statistik as $data) : ?>
        <tr>
            <td><?php echo $y; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["kelahiran"]; ?></td>
            <td><?php echo $data["alamat"]; ?></td>
            <td><?php echo $data["perguruan_tinggi"]; ?></td>
            <td><?php echo $data["jurusan"]; ?></td>
            <td><?php echo $data["nim"]; ?></td>
            <td><?php echo $data["kelamin"]; ?></td>
            <td><?php echo $data["agama"]; ?></td>
            <td><?php echo $data["hobby"]; ?></td>
            <td><?php echo $data["motto"]; ?></td>
            <td>
                <?php if(!empty($data["unggah_foto_diri"])): ?>
                <img src="uploads/<?php echo $data["unggah_foto_diri"]; ?>" width="100">
                <?php else: ?>
                <p>Tidak ada gambar</p>
                <?php endif; ?>
            </td>
        </tr>
        <?php $y++; ?>
        <?php endforeach; ?>
    </table>
    <br>
    <p>Total Data = <?php echo ($y - 1); ?></p>
    <br>
    <button><a href="index.php">Isi Biodata</a></button>
</body>
</html>