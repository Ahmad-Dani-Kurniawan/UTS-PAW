<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="p-3 mb-2 bg-secondary bg-gradient text-white" style="width: auto; height: 875px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end" style="width: 1400px; margin-left : 100px;">
            <div class="container-fluid">
                <h4 class="navbar-brand" style="font-size: 36pt;">Karang Taruna Warrior</h4>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="margin-left: 380px; font-size: 20pt;">
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

        <div class="card text-white bg-danger mb-3" style="width: 20rem; height: 10rem; margin-left: 650px; margin-top: 200px; border-radius:20px; font-color: black;">
            <div class="card-body">
            <?php
                include 'koneksi.php';
                $id=$_GET['id_205'];

                $sql="DELETE FROM tbl_205 WHERE id_205=$id";
                $hasil=mysqli_query($koneksi, $sql);
                if(!$hasil){
                    echo "Delete data gagal";
                }else{
                    echo "Data berhasil di delete<br>";
                    echo "<a href='read.php'>Show data</a>";
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>