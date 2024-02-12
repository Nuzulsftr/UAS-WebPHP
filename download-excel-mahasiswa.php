<?php
session_start();
// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('login dulu sayang');
            document.location.href = 'login.php' ;
            </script>"; 
    exit;
        
}

require 'config/app.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2', 'NO');
$sheet->setCellValue('B2', 'nim');
$sheet->setCellValue('C2', 'nama');
$sheet->setCellValue('D2', 'jurusan');
$sheet->setCellValue('E2', 'jk');
$sheet->setCellValue('F2', 'ALAMAT');
$sheet->setCellValue('G2', 'NO HP');

$data_mahasiswa = select("SELECT * FROM mahasiswa");

$no = 1;
$start = 3;

foreach ($data_mahasiswa as $mahasiswa)
{
    $sheet->setCellValue('A' . $start, $no++);
    $sheet->setCellValue('B' . $start, $mahasiswa['nim']);
    $sheet->setCellValue('c' . $start, $mahasiswa['nama']);
    $sheet->setCellValue('D' . $start, $mahasiswa['jurusan']);
    $sheet->setCellValue('E' . $start, $mahasiswa['jk']);
    $sheet->setCellValue('F' . $start, $mahasiswa['alamat']);
    $sheet->setCellValue('G' . $start, $mahasiswa['nohp']);

    $start++;

}


$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="hello world.xlsx"');
readfile('hello world.xlsx');
unlink('hello world.xlsx');
exit;