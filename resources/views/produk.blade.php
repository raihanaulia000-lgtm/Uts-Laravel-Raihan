<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UTS Laravel - Produk</title>
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

    <!-- Judul Halaman di body, sebelah kiri, ukuran kecil -->
    <div class="container mt-3">
        <h3 class="text-start">Halaman Produk</h3>
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