<?php

session_start();

//Bikin koneksi
$c = mysqli_connect('localhost', 'root', '', 'sipegawai (vol 2)');


//Login
if (isset($_POST['login'])) {
    //Initiate variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($c, "SELECT * FROM user WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($check);

    if ($hitung > 0) {
        //Jika datanya ditemukan 
        //berhasil login

        $_SESSION['login'] = 'true';
        header('location:utama.php');
    } else {
        //Data tidak ditemukan 
        //gagal login
        echo '
        <script>alert("Username atau Password salah");
        window.location.href="login.php"
        </script>
        ';
    };
}


//menambah pegawai
if (isset($_POST['tambahpegawai'])) {
    $idpegawai = $_POST['idp'];
    $namapegawai = $_POST['namapegawai'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $status = $_POST['status'];

    $insert = mysqli_query($c, "insert into pegawai (idpegawai,namapegawai,tanggallahir,jeniskelamin,status)
        values ('$idpegawai','$namapegawai','$tanggallahir','$jeniskelamin','$status')");

    if ($insert) {
        header('location:index.php');
    } else {
        echo '
        <script>alert("Gagal menambah pegawai baru");
        window.location.href="index.php"
        </script>
        ';
    }
}


//menambah keluarga
if (isset($_POST['tambahkeluarga'])) {
    $idkeluarga = $_POST['idk'];
    $idpegawai = $_POST['idpegawai'];
    $namakeluarga = $_POST['namakeluarga'];
    $pendidikan = $_POST['pendidikan'];
    $hubungan = $_POST['hubungan'];

    $insertkeluarga = mysqli_query($c, "insert into keluarga (idkeluarga,idpegawai,namakeluarga,pendidikan,hubungan)
        values ('$idkeluarga','$idpegawai','$namakeluarga','$pendidikan','$hubungan')");

    if ($insertkeluarga) {
        header('location:keluarga.php');
    } else {
        echo '
        <script>alert("Gagal menambah pegawai baru");
        window.location.href="keluarga.php"
        </script>
        ';
    }
}


//menambah pendidikan
if (isset($_POST['tambahpendidikan'])) {
    $idpendidikan = $_POST['idpd'];
    $idpegawai = $_POST['idpegawai'];
    $tingkat = $_POST['tingkat'];
    $jurusan = $_POST['jurusan'];
    $namasekolah = $_POST['namasekolah'];

    $insertpendidikan = mysqli_query($c, "insert into pendidikan (idpendidikan,idpegawai,tingkat,jurusan,namasekolah)
        values ('$idpendidikan','$idpegawai','$tingkat','$jurusan','$namasekolah')");

    if ($insertpendidikan) {
        header('location:pendidikan.php');
    } else {
        echo '
        <script>alert("Gagal menambah pegawai baru");
        window.location.href="pendidikan.php"
        </script>
        ';
    }
}


//edit pegawai
if (isset($_POST['editpegawai'])) {
    $np = $_POST['namapegawai'];
    $tl = $_POST['tanggallahir'];
    $jk = $_POST['jeniskelamin'];
    $status = $_POST['status'];
    $idp = $_POST['idp'];  //idpegawai

    $query = mysqli_query($c, "update pegawai set namapegawai='$np', tanggallahir='$tl', jeniskelamin='$jk', status='$status' where idpegawai='$idp' ");

    if ($query) {
        header('location:index.php');
    } else {
        echo '
        <script>alert("Gagal mengubah data pegawai baru");
        window.location.href="index.php"
        </script>
        ';
    }
}


//edit keluarga
if (isset($_POST['editkeluarga'])) {
    $nk = $_POST['namakeluarga'];
    $pend = $_POST['pendidikan'];
    $hubungan = $_POST['hubungan'];
    $idk = $_POST['idk'];  //idkeluarga

    $querykeluarga = mysqli_query($c, "update keluarga set namakeluarga='$nk', pendidikan='$pend', hubungan='$hubungan' where idkeluarga='$idk' ");

    if ($querykeluarga) {
        header('location:keluarga.php');
    } else {
        echo '
        <script>alert("Gagal mengubah data keluarga");
        window.location.href="keluarga.php"
        </script>
        ';
    }
}


//edit pendidikan
if (isset($_POST['editpendidikan'])) {
    $tk = $_POST['tingkat'];
    $js = $_POST['jurusan'];
    $ns = $_POST['namasekolah'];
    $idpd = $_POST['idpd'];  //idpendidikan

    $querykeluarga = mysqli_query($c, "update pendidikan set tingkat='$tk', jurusan='$js', namasekolah='$ns' where idpendidikan='$idpd' ");

    if ($querykeluarga) {
        header('location:pendidikan.php');
    } else {
        echo '
        <script>alert("Gagal mengubah data keluarga");
        window.location.href="pendidikan.php"
        </script>
        ';
    }
}

//hapus pegawai
if (isset($_POST['hapuspegawai'])) {
    $idp = $_POST['idp'];

    $query = mysqli_query($c, "delete from pegawai where idpegawai='$idp'");
    if ($query) {
        header('location:index.php');
    } else {
        echo '
        <script>alert("Gagal");
        window.location.href="index.php"
        </script>
        ';
    }
}


//hapus keluarga
if (isset($_POST['hapuskeluarga'])) {
    $idk = $_POST['idk'];

    $query = mysqli_query($c, "delete from keluarga where idkeluarga='$idk'");
    if ($query) {
        header('location:keluarga.php');
    } else {
        echo '
        <script>alert("Gagal");
        window.location.href="keluarga.php"
        </script>
        ';
    }
}


//hapus pendidikan
if (isset($_POST['hapuspendidikan'])) {
    $idpd = $_POST['idpd'];

    $query = mysqli_query($c, "delete from pendidikan where idpendidikan='$idpd'");
    if ($query) {
        header('location:pendidikan.php');
    } else {
        echo '
        <script>alert("Gagal");
        window.location.href="pendidikan.php"
        </script>
        ';
    }
}


//menambah absen
if (isset($_POST['tambahabsen'])) {
    $namapegawai = $_POST['namapegawai'];
    $absen = $_POST['absen'];

    $insertabsen = mysqli_query($c, "insert into absen (idpegawai,absen)
        values ('$namapegawai','$absen')");

    if ($insertabsen) {
        header('location:absen.php');
    } else {
        echo '
        <script>alert("Gagal menambah pegawai baru");
        window.location.href="absen.php"
        </script>
        ';
    }
}

//edit absen
if (isset($_POST['editabsen'])) {
    $absen = $_POST['absen'];
    $idp = $_POST['idp'];

    $queryabsen = mysqli_query($c, "update absen set absen='$absen' where idpegawai='$idp'");

    if ($queryabsen) {
        header('location:absen.php');
    } else {
        echo '
        <script>alert("Gagal mengubah data keluarga");
        window.location.href="absen.php"
        </script>
        ';
    }
}


//hapus absen
if (isset($_POST['hapusabsen'])) {
    $idpg = $_POST['idpg'];

    $query = mysqli_query($c, "delete from absen where idpegawai='$idpg'");
    if ($query) {
        header('location:absen.php');
    } else {
        echo '
        <script>alert("Gagal");
        window.location.href="absen.php"
        </script>
        ';
    }
}


//menambah gaji
if (isset($_POST['tambahgaji'])) {
    $namapegawai = $_POST['namapegawai'];
    $golongan = $_POST['golongan'];
    $jamkerja = $_POST['jamkerja'];
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];

    $insertgaji = mysqli_query($c, "insert into gaji (idpegawai,golongan,jamkerja,gaji,tunjangan)
        values ('$namapegawai','$golongan','$jamkerja','$gaji','$tunjangan')");

    if ($insertgaji) {
        header('location:gaji.php');
    } else {
        echo '
        <script>alert("Gagal menambah pegawai baru");
        window.location.href="gaji.php"
        </script>
        ';
    }
}


//hapus gaji
if (isset($_POST['hapusgaji'])) {
    $idpgd = $_POST['idpgd'];

    $query = mysqli_query($c, "delete from gaji where idpegawai='$idpgd'");
    if ($query) {
        header('location:gaji.php');
    } else {
        echo '
        <script>alert("Gagal");
        window.location.href="gaji.php"
        </script>
        ';
    }
}


//edit gaji
if (isset($_POST['editgaji'])) {
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];
    $idp = $_POST['idp'];

    $querygaji = mysqli_query($c, "update gaji set gaji='$gaji', tunjangan='$tunjangan' where idpegawai='$idp'");

    if ($querygaji) {
        header('location:gaji.php');
    } else {
        echo '
        <script>alert("Gagal mengubah data keluarga");
        window.location.href="gaji.php"
        </script>
        ';
    }
}


//Daftar
if (isset($_POST['daftar'])) {
    //Initiate variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insertdaftar = mysqli_query($c, "insert into user (username,password)
        values ('$username','$password')");
    if ($insertdaftar) {
        header('location:utama.php');
    } else {
        echo '
            <script>alert("Gagal menambah pegawai baru");
            window.location.href="registrasi.php"
            </script>
            ';
    }
}
