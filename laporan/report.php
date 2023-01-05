<?php

require 'ceklogin.php';
?>

?>
<html>

<head>
    <title>
    </title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <style type="text/css">
        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h4>Dinas Pendidikan</h4>
        <div class="data-tables datatable-dark">
            <h2>
                <p class="center">PEMERINTAH PROVINSI KALIMANTAN SELATAN </p>
            </h2>

            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Gaji</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $get = mysqli_query($c, "select * from gaji p, pegawai pl where p.idpegawai=pl.idpegawai");
                    $i = 20210001;
                    $ih = 31;

                    while ($p = mysqli_fetch_array($get)) {
                        $idpegawai = $p['idpegawai'];
                        $namapegawai = $p['namapegawai'];
                        $tanggallahir = $p['tanggallahir'];
                        $jeniskelamin = $p['jeniskelamin'];
                        $jabatan = $p['status'];
                        $gaji = $p['gaji'];
                        $total = $ih * $gaji;

                    ?>
                        <tr>
                            <td><?php echo $idpegawai; ?> </td>
                            <td><?php echo $namapegawai; ?></td>
                            <td><?php echo $tanggallahir; ?></td>
                            <td><?php echo $jeniskelamin; ?></td>
                            <td><?php echo $jabatan; ?></td>
                            <td>Rp. <?= number_format("$total", 2, ",", "."); ?></td>
                        </tr>


                    <?php
                    }; //end of while

                    ?>

                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#datatablesSimple').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>