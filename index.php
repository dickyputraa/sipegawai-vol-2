<?php
require 'ceklogin.php';

//Hitung jumlah pegawai
$h1 = mysqli_query($c, "select * from pegawai");
$h2 = mysqli_num_rows($h1);  //jumlah pegawai
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Pegawai </title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/st.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .sb-sidenav-dark {
            background-color: transparent;
            color: white;
        }

        .sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
            color: white;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-nav-link-icon {
            color: white;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link {
            color: white;
        }

        T {
            margin-top: 0;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
            color: #f9fafb;
        }

        .breadcrumb-item.active {
            color: #f8fafc;
        }

        .sb-sidenav-dark .sb-sidenav-footer {
            background-color: transparent;
        }

        .container-fluid {
            background-color: transparent;
        }

        input[type="checkbox"] {
            position: relative;
            width: 40px;
            height: 20px;
            appearance: none;
            background-color: #434343;
            outline: none;
            border-radius: 10px;
            transition: .5s ease;
            cursor: pointer;
        }

        input[type="checkbox"]:checked {
            background-color: blue;
        }

        input[type="checkbox"]::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: white;
            border-radius: 50%;
            top: 2px;
            left: 2px;
            transition: .5s ease;
        }

        input[type="checkbox"]:checked::before {
            transform: translateX(20px);
        }

        .dark {
            background-color: black;
            color: white;
        }

        .sb-topnav {
            background-color: grey;
            color: #fff;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <div class="banner">
        <video autoplay loop muted>
            <source src="3.mp4">
        </video>
    </div>
    <nav class="sb-topnav navbar navbar-expand navbar-dark ">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">SI Dinas Pendidikan</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i> <img src="images/profil.jpg" class="w3-circle" alt="Alps" width="35px" height="35px">
                    </i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href=" ">Profil</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <script>
        function ubahMode() {
            const ubah = document.body;
            ubah.classList.toggle("dark");
        }
    </script>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <br><input type="checkbox" onclick="ubahMode()">
                        <div class="sb-sidenav-menu-heading">Menu </div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                            Pegawai
                        </a>
                        <a class="nav-link" href="keluarga.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                            Keluarga
                        </a>
                        <a class="nav-link" href="pendidikan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                            Pendidikan
                        </a>
                        <a class="nav-link" href="absen.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                            Absen
                        </a>
                        <a class="nav-link" href="gaji.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                            Gaji
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="laporan/laporan.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>Laporan
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    D?
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <T> Data pegawai </T>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Selamat Datang</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Jumlah Pegawai : <?= $h2; ?></div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="w3-button w3-hover-purple w3-border w3-border-purple text-white mb-4 " data-bs-toggle="modal" data-bs-target="#myModal">
                        Tambah Pegawai Baru
                    </button>
                    <a type="button" class="w3-button w3-hover-purple w3-border w3-border-purple text-white mb-4" class="nav-link" href="laporan/lp.php">
                        Laporan
                    </a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pegawai
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>N0</th>
                                        <th>Nama pegawai</th>
                                        <th>Tanggal lahir</th>
                                        <th>Jenis kelamin</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $get = mysqli_query($c, "select * from pegawai");
                                    $i = 20210001;

                                    while ($p = mysqli_fetch_array($get)) {
                                        $namapegawai = $p['namapegawai'];
                                        $tanggallahir = $p['tanggallahir'];
                                        $jeniskelamin = $p['jeniskelamin'];
                                        $status = $p['status'];
                                        $idpegawai = $p["idpegawai"];

                                    ?>

                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $namapegawai; ?></td>
                                            <td><?= $tanggallahir; ?></td>
                                            <td><?= $jeniskelamin; ?></td>
                                            <td><?= $status; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $idpegawai; ?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $idpegawai; ?>">
                                                    Delete
                                                </button>
                                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#detail<?= $idpegawai; ?>"><i class="fa fa-eye"></i>
                                                    Detail
                                                </button>

                                            </td>
                                        </tr>

                                        <!-- modal edit -->
                                        <div class="modal fade" id="edit<?= $idpegawai; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Ubah <?= $namapegawai; ?></h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <input type="text" name="namapegawai" class="form-control" placeholder="Nama pegawai" value="<?= $namapegawai; ?>">
                                                            <input type="date" name="tanggallahir" class="form-control mt-2" placeholder="Tanggal lahir" value="<?= $tanggallahir; ?>">
                                                            <input type="radio" name="jeniskelamin" placeholder="Jenis kelamin" value="Laki-laki"> Laki-laki
                                                            <input type="radio" name="jeniskelamin" placeholder="Jenis kelamin" value="Perempuan"> Perempuan
                                                            <br>
                                                            <select class="form-control mt-2" name="status" placeholder="Status" value="<?= $status; ?>">
                                                                <option value="">Pilih Jabatan</option>
                                                                <option value="Guru">Guru</option>
                                                                <option value="Dosen">Dosen</option>
                                                                <option value="Rektor">Rektor</option>
                                                            </select>
                                                            <input type="hidden" name="idp" value="<?= $idpegawai; ?>">
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success" name="editpegawai">submit</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>


                                        <!-- modal delete -->
                                        <div class="modal fade" id="delete<?= $idpegawai; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus <?= $namapegawai; ?></h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <form method="post">

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            Apakah anda yakin ingin menghapus data ini?
                                                            <input type="hidden" name="idp" value="<?= $idpegawai; ?>">
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success" name="hapuspegawai">submit</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- modal detail -->
                                        <div class="modal fade" id="detail<?= $idpegawai; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Details <?= $namapegawai; ?></h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <input readonly value="Nama Pegawai"> <input type="text" name="namapegawai" placeholder="Nama pegawai" readonly value="<?= $namapegawai; ?>">
                                                            <input class="mt-2" readonly value="Tanggal Lahir"> <input type="date" name="tanggallahir" placeholder="Tanggal lahir" readonly value="<?= $tanggallahir; ?>">
                                                            <input class="mt-2" readonly value="Jenis Kelamin"> <input name="jeniskelamin" placeholder="Jenis kelamin" readonly value="<?= $jeniskelamin; ?>">
                                                            <input class="mt-2" readonly value="Jabatan"> <input name="status" placeholder="Status" readonly value="<?= $status; ?>">
                                                            <input class="mt-2" readonly value="Nama Orang Tua"> <input type="text" name="namakeluarga" placeholder="Nama Orang Tua" readonly value="<?= $namakeluarga; ?>">
                                                            <input type="hidden" name="idp" value="<?= $idpegawai; ?>">
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>


                                    <?php
                                    }; //end of while
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-transparent mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; D? 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pegawai Baru</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" name="idp" value="<?= $i++; ?>">
                    <input type="text" name="namapegawai" class="form-control" placeholder="Nama pegawai">
                    <input type="date" name="tanggallahir" class="form-control mt-2" placeholder="Tanggal lahir">
                    <input type="radio" name="jeniskelamin" placeholder="Jenis kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jeniskelamin" placeholder="Jenis kelamin" value="Perempuan"> Perempuan
                    <br>
                    <select class="form-control mt-2" name="status" placeholder="Status">
                        <option value="">Pilih Jabatan</option>
                        <option value="Guru">Guru</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Rektor">Rektor</option>
                    </select>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="tambahpegawai">submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </form>

        </div>
    </div>
</div>




</html>