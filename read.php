<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="p-3 mb-2 bg-secondary bg-gradient text-white" style="width: auto; height: 870px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end" style="width: 1400px; margin-left : 100px;">
            <div class="container-fluid">
                <h4 class="navbar-brand" style="font-size: 36pt; margin-left: 80px;">UTS PAW</h4>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="margin-left: 600px; font-size: 20pt;">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="">CRUD</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">Informasi</a>
                        </li>
                        <a class="navbar-brand" href="" style="margin-left: 80px;">
                            <img src="image/pf.png" alt="Profile" width="50" height="50" class="d-inline-block align-text-top">
                        </a>
                    </ul>
                </div>
            </div>
        </nav>

        <div style="width: 200px; font: 20pt; margin-left:100px; margin-top: 50px;">
            <button type="button" class="btn btn-primary btn-lg">Data UTS</button>
        </div>
        <table class="table table-success table-striped" style="width: 1400px; margin-left : 100px; margin-top: 50px;">
            <thead>
                <tr>
                    <td>ID_205</td>
                    <td>Nama_205</td>
                    <td>Email_205</td>
                    <td>Aksi</td>
                </tr>
                <?php
                    include 'koneksi.php';
                    $sql="SELECT * From tbl_205";
                    $hasil = mysqli_query($koneksi, $sql);
                    while($row = mysqli_fetch_array($hasil))
                    {
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?=$row['id_205'];?></td>
                    <td><?=$row['nama_205'];?></td>
                    <td><?=$row['email_205'];?></td>
                    <td><a class="btn btn-warning" href="edit.php?id=<?=$row['id_205']?>" role="button">Edit </a>
                    <a class="btn btn-danger" href="delete.php?id=<?=$row['id_205']?>" role="button">Delete</a></td>
                </tr>
                <?php } 
                ?>
            </tbody>
        </table>

        <div class="st" style="width: 200px; font: 20pt; margin-left:100px; margin-top: 50px;">
            <a class="btn btn-primary" href="tambah.php" role="button">Tambah Data</a>
        </div>
    </div>
</body>
</html>