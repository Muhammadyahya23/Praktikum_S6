<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah prodi oleh Muhammad Yahya Dan 2110020044</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h1 class="text-center mb-4">Form Edit prodi</h1>
                <form action="<?= site_url('prodi/perbaharui/' . $prodi->id_prodi) ?>" method="post">
                    <div class="form-group">
                        <label for="kode_prodi">kode_prodi</label>
                        <input type="text" class="form-control" name="kode_prodi" id="kode_prodi" value="<?= $prodi->kode_prodi ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_prodi">Nama prodi</label>
                        <input type="text" class="form-control" name="nama_prodi" id="nama_prodi" value="<?= $prodi->nama_prodi ?>">
                    </div>
                    <button type=" submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>