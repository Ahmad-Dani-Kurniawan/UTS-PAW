<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="css/bootstrap.css" rel="stylesheet">

</head>
<body>
    <?php
        include 'koneksi.php';
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_205 where id_205=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "query salah";
        }
    ?>
    <div class="p-3 mb-2 bg-secondary bg-gradient text-white" style="width: auto; height: 875px;">
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

        <div class="st" style="width: 200px; font-size: 24pt; margin-left:100px; margin-top: 50px;">
            <button type="button" class="btn btn-primary btn-lg">Update Data</button>
        </div>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
            <form action="update.php" method="POST" style="margin-left:100px; margin-right:155px; margin-top:50px;">
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_205" name="id_205" value="<?php echo $row['id_205'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama_205</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama_205'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email_205</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email_205'] ?>">
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" name="simpan" style="margin-right: 50px; margin-top: 50px;" value="Update" class="btn btn-primary">
                        <a href="read.php" role="submit" name="batal" class="btn btn-danger" style="margin-top: 50px;">Batal</a>
                    </input>
                </div>
            </form>
        <?php } ?>
    </div>
</body>
</html>