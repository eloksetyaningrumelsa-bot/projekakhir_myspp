<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- NAVBAR -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">MySPP BRILLIANT</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <!-- PROFIL ADMIN DI POJOK KANAN -->
        <ul class="navbar-nav ms-auto me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Profile" width="32"
                        height="32" class="rounded-circle me-2">
                    <span>Admin</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!"><i class="fas fa-user me-2"></i> Profil Saya</a></li>
                    <li><a class="dropdown-item" href="#!"><i class="fas fa-cog me-2"></i> Pengaturan</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- SIDENAV + CONTENT -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                            Data Siswa
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                            Data Kelas
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Log Out
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-3">
                    <!-- KARTU JUMLAH SISWA -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body text-center">
                                    <h5 class="mb-2">TK</h5>
                                    <h2 class="fw-bold">25 Siswa</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body text-center">
                                    <h5 class="mb-2">SD</h5>
                                    <h2 class="fw-bold">55 Siswa</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body text-center">
                                    <h5 class="mb-2">SMP</h5>
                                    <h2 class="fw-bold">60 Siswa</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body text-center">
                                    <h5 class="mb-2">SMA/SMK</h5>
                                    <h2 class="fw-bold">80 Siswa</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TABEL -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Tagihan Terbaru
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kelas</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Garrett Winters</td>
                                        <td>Tokyo</td>
                                        <td>X AKL</td>
                                        <td>
                                            <button class="btn btn-sm btn-success status-btn">Lunas</button>
                                        </td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Garrett Winters</td>
                                        <td>Tokyo</td>
                                        <td>X AKL</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
                                        </td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Garrett Winters</td>
                                        <td>Tokyo</td>
                                        <td>X AKL</td>
                                        <td>
                                            <button class="btn btn-sm btn-success status-btn">Lunas</button>
                                        </td>
                                        <td>$170,750</td>
                                    </tr>
                                    <!-- Tambah data lainnya -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <!-- FOOTER -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; MySPPgifds 2025 RPL SMK PGRI WLINGI</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Script bawaan SB Admin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <!-- Script tambahan untuk toggle tombol status -->
    <script>
        // Event Delegation agar semua tombol status tetap interaktif meski tabel di-render ulang
        document.querySelector("#datatablesSimple tbody").addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("status-btn")) {
                let btn = e.target;
                if (btn.innerText.trim() === "Lunas") {
                    btn.classList.remove("btn-success");
                    btn.classList.add("btn-danger");
                    btn.innerText = "Belum Bayar";
                } else {
                    btn.classList.remove("btn-danger");
                    btn.classList.add("btn-success");
                    btn.innerText = "Lunas";
                }
            }
        });
    </script>
</body>
</html>
