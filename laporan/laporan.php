<?php
// memanggil library FPDF
require '../ceklogin.php';
require '../fpdf.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(250, 7, 'Laporan Pegawai', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(250, 7, '', 0, 1, 'C');
$pdf->Cell(250, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(250, 7, '', 0, 1, 'C');
$pdf->Ln();
// Garis Bawah Double
$pdf->SetLineWidth(1);
$pdf->Line(0, 31, 400, 31);
$pdf->SetLineWidth(0);
$pdf->Line(0, 32, 400, 32);
$pdf->Ln(6);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'No', 1, 0);
$pdf->Cell(50, 6, 'Nama Pegawai', 1, 0);
$pdf->Cell(30, 6, 'Tanggal Lahir', 1, 0);
$pdf->Cell(30, 6, 'Jenis Kelamin', 1, 0);
$pdf->Cell(30, 6, 'Jabatan', 1, 0);
$pdf->Cell(30, 6, 'Jam Kerja[Hari]', 1, 0);
$pdf->Cell(30, 6, 'Gaji', 1, 1);

$pdf->SetFont('Arial', '', 10);


$get = mysqli_query($c, "select * from gaji p, pegawai pl where p.idpegawai=pl.idpegawai");
while ($row = mysqli_fetch_array($get)) {
    $pdf->Cell(20, 6, $row['idpegawai'], 1, 0);
    $pdf->Cell(50, 6, $row['namapegawai'], 1, 0);
    $pdf->Cell(30, 6, $row['tanggallahir'], 1, 0);
    $pdf->Cell(30, 6, $row['jeniskelamin'], 1, 0);
    $pdf->Cell(30, 6, $row['status'], 1, 0);
    $pdf->Cell(30, 6, $row['jamkerja'], 1, 0);
    $pdf->Cell(30, 6, $row['gaji'], 1, 1);
}

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(400, 7, 'BANJARMASIN, ' . (date('Y-m-d')), 0, 1, 'C');
$pdf->Cell(400, 7, 'MENGETAHUI ', 0, 1, 'C');
$pdf->Cell(400, 7, 'KEPALA SUB.BAG UMUM & KEPEGAWAIAN', 0, 1, 'C');
$pdf->Ln(16);
$pdf->SetFont('Arial', 'U', 12);
$pdf->Cell(400, 7, 'Ir. Akhmad Hairin, Mp', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(400, 7, 'NIP. 19680129 199303 1 007 ', 0, 1, 'C');

$pdf->Output();
