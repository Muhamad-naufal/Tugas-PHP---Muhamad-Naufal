<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT * from mahasiswa as b join fakultas as p on b.id_fakultas = p.id join jurusan as pb on b.id_jurusan = pb.id join kelas as k on b.id_kelas = k.id ORDER BY NIM DESC;");
                ?>
                <center>
                    <h1>DATA MAHASISWA</h1>
                </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?nama_halaman=NAMA HALAMAN NYA"> <i class="fa-solid fa-plus"></i> </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            NIM
                        </th>
                        <th>
                            Nama Lengkap
                        </th>
                        <th>
                            Tanggal Lahir
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Kelas
                        </th>
                        <th>
                            Jurusan
                        </th>
                        <th>
                            Fakultas
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <td> <?php echo $data["NIM"] ?></td>
                                <td> <?php echo $data["nama_lengkap"] ?> </td>
                                <td> <?php echo $data["tanggal_lahir"] ?> </td>
                                <td> <?php echo $data["alamat"] ?></td>
                                <td> <?php echo $data["nama_kelas"] ?></td>
                                <td> <?php echo $data["nama_jurusan"] ?></td>
                                <td> <?php echo $data["nama_fakultas"] ?></td>
                                <td>
                                    <a href="proses_hapus.php?NIM=<?php echo $data["NIM"] ?>"">  <button type=" button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button> </a>
                                    <a href="edit.php?NIM=<?php echo $data["NIM"] ?>"><button type=" button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>