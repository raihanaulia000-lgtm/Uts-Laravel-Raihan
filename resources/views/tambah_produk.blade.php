<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UTS Laravel - Form Tambah Produk</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Brand di kiri -->
            <a class="navbar-brand" href="#">UTS Laravel</a>
            <!-- Tombol hamburger di kanan untuk offcanvas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Judul Halaman -->
    <div class="container mt-3">
        <h1>Form Tambah Produk</h1>
    </div>

    <!-- Form Tambah Produk -->
    <div class="container mt-3">
        <form method="POST" action="/produk/store">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="kode_produk" class="form-label">Kode Produk</label>
                    <input type="text" class="form-control" id="kode_produk" name="kode_produk"
                        placeholder="Input Kode Produk" required>
                </div>
                <div class="col-md-4">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                        placeholder="Input Nama Produk" required>
                </div>
                <div class="col-md-4">
                    <label for="jenis_produk" class="form-label">Jenis Produk</label>
                    <select class="form-select" id="jenis_produk" name="jenis_produk" required>
                        <option value="" disabled selected>Pilih Produk</option>
                        <option value="Alat tulis">Alat tulis</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Pakaian">Pakaian</option>
                        <option value="Makanan">Makanan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-8">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Input Harga"
                        required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">&nbsp;</label>
                    <button type="submit" class="btn btn-success w-100">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Offcanvas Sidebar di kanan -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
        style="width: 320px;">
        <div class="offcanvas-header">
            <!-- Judul kecil di atas -->
            <h5 class="offcanvas-title" id="offcanvasRightLabel">UTS Laravel</h5>
            <!-- Tombol close X di kanan atas -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Link vertikal: Home dan Produk -->
            <ul class="list-unstyled">
                <li class="mb-3">
                    <a href="/" class="text-decoration-none">Home</a>
                </li>
                <li class="mb-3">
                    <a href="/produk" class="text-decoration-none">Produk</a>
                </li>
            </ul>
            <!-- Input search + tombol Search sejajar -->
            <div class="mt-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-outline-success" type="button">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>