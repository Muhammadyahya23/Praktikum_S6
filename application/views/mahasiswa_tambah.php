<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa oleh Muhammad Yahya Dan 2110020044</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Form Tambah Mahasiswa</h1>
        <form action="<?= site_url('mahasiswa/simpan') ?>" method="post" class="mt-4">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" required>
            </div>
            <div class="form-group">
                <label for="nama_mhs">Nama Mahasiswa</label>
                <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" required>
            </div>
            <div class="form-group">
                <label for="id_prodi">Program Studi</label>
                <select name="id_prodi" id="id_prodi" class="form-control" required>
                    <option value="">Pilih Program Studi</option>
                    <?php foreach ($prodi as $ps) : ?>
                        <option value="<?= $ps->id_prodi ?>">
                            <?= $ps->nama_prodi ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>