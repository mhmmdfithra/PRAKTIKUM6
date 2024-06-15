<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #A7E6FF;
        }
        .container {
            margin-top: 50px;
        }
        .welcome-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 30px;
        }
        .table-container {
            margin-top: 30px;
        }
        .table thead {
            background-color: #343a40;
            color: #ffffff;
        }
        .btn-add {
            margin-top: 20px;
        }
        .btn-logout {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-card">
            <h1>Selamat Datang di Database Perpustakaan</h1>
            <p>Selamat datang! Berikut adalah daftar buku yang tersedia.</p>
            <div class="table-container">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th  >Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $row): ?>
                                <tr>
                                    <td><?= $row['judul'] ?></td>
                                    <td><?= $row['penulis'] ?></td>
                                    <td><?= $row['penerbit'] ?></td>
                                    <td><?= $row['tahun_terbit'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/editdata/'.$row['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="<?= base_url('/hapusdata/'.$row['id'])?>" style="display:inline" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('/logout')?>" class="btn btn-danger btn-logout">Logout</a>
                        <a class="btn btn-success btn-add" href="<?= base_url('/tambahdata')?>">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- create list of books -->
       
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
