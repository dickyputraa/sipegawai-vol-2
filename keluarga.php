<?php
require 'ceklogin.php';

//Hitung jumlah keluarga
$h1 = mysqli_query($c, "select * from keluarga");
$h2 = mysqli_num_rows($h1);  //jumlah keluarga

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data keluarga</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/st.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .sb-sidenav-dark {
            background-color: transparent;
            color: #d9d9d9;
        }

        .sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
            color: #f9fafb;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-nav-link-icon {
            color: #f9fafb;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link {
            color: #f9fafb;
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
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
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
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
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
                        <h1>Data keluarga</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat Datang</li>
                        </ol>
                        <button type="button" class="w3-button w3-hover-purple w3-border w3-border-purple text-white mb-4" data-bs-toggle="modal" data-bs-target="#myModal">
                            Tambah Data keluarga
                        </button>
                        <a type="button" class="w3-button w3-hover-purple w3-border w3-border-purple text-white mb-4" class="nav-link" href="laporan/lk.php">
                            Laporan
                        </a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table keluarga
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pegawai</th>
                                            <th>Nama Orang Tua</th>
                                            <th>Pendidikan</th>
                                            <th>Hubungan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $get = mysqli_query($c, "select * from keluarga p, pegawai pl where p.idpegawai=pl.idpegawai");
                                        $i = 20210001;

                                        while ($p = mysqli_fetch_array($get)) {
                                            $namapegawai = $p['namapegawai'];
                                            $namakeluarga = $p['namakeluarga'];
                                            $pendidikan = $p['pendidikan'];
                                            $hubungan = $p['hubungan'];
                                            $idkeluarga = $p["idkeluarga"];

                                        ?>

                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $namapegawai; ?></td>
                                                <td><?= $namakeluarga; ?></td>
                                                <td><?= $pendidikan; ?></td>
                                                <td><?= $hubungan; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $idkeluarga; ?>">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $idkeluarga; ?>">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>


                                            <!-- The Modal -->
                                            <div class="modal fade" id="edit<?= $idkeluarga; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Ubah Data Keluarga <?= $namapegawai; ?></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <form method="post">

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <input type="text" name="namakeluarga" class="form-control" placeholder="Nama keluarga" value="<?= $namakeluarga; ?>">
                                                                <select class="form-control mt-2" name="pendidikan" placeholder="Pendidikan" value="<?= $pendidikan; ?>">
                                                                    <option value="">Pilih Pendidikan Orang Tua</option>
                                                                    <option value="SD">SD</option>
                                                                    <option value="SMP">SMP</option>
                                                                    <option value="SMA">SMA</option>
                                                                </select>
                                                                <select class="form-control mt-2" name="hubungan" placeholder="Hubungan" value="<?= $hubungan; ?>">
                                                                    <option value="">Pilih Hubungan</option>
                                                                    <option value="Ayah">Ayah</option>
                                                                    <option value="Ibu">Ibu</option>
                                                                </select>
                                                                <input type="hidden" name="idk" value="<?= $idkeluarga; ?>">
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success" name="editkeluarga">submit</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                            </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Modal delete -->
                                            <div class="modal fade" id="delete<?= $idkeluarga; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data Keluarga <?= $namapegawai; ?></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <form method="post">

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus data ini?
                                                                <input type="hidden" name="idk" value="<?= $idkeluarga; ?>">
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success" name="hapuskeluarga">submit</button>
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
                <footer class="py-4 bg-light mt-auto">
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
                <h4 class="modal-title">Tambah Data Keluarga</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form method="post">

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" name="idk" value="<?= $i++; ?>">
                    Pilih Pegawai
                    <select name="idpegawai" class="form-control">

                        <?php
                        $getpegawai = mysqli_query($c, "select * from pegawai");

                        while ($pg = mysqli_fetch_array($getpegawai)) {
                            $idpegawai = $pg['idpegawai'];
                            $namapegawai = $pg['namapegawai'];

                        ?>

                            <option value="<?= $idpegawai; ?>"><?= $namapegawai; ?> - <?= $idpegawai; ?></option>

                        <?php
                        }
                        ?>
                    </select>
                    <input type="text" name="namakeluarga" class="form-control mt-2" placeholder="Nama Orang Tua">
                    <select class="form-control mt-2" name="pendidikan" placeholder="Pendidikan">
                        <option value="">Pilih Pendidikan Orang Tua</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                    </select>
                    <select class="form-control mt-2" name="hubungan" placeholder="Hubungan">
                        <option value="">Pilih Hubungan</option>
                        <option value="Ayah">Ayah</option>
                        <option value="Ibu">Ibu</option>
                    </select>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="tambahkeluarga">submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </form>

        </div>
    </div>
</div>


</html>