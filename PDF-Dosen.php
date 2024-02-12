<?php

require __DIR__.'/vendor/autoload.php';
require 'config/app.php';


use Spipu\Html2Pdf\Html2Pdf;

$data_dosen = select("SELECT * FROM dosen");

$content .= '
<page>
        <table border="1" align="center">
            <tr>
                <th> NO </th>
                <th> NIDN </th>
                <th> NAMA</th>
                <th> MATA KULIAH </th>
                <th> JADWAL NGAJAR </th>
                <th> EMAIL </th>
                <th> ALAMAT </th>
                <th> NO TELPON </th>
            </tr>';

            $no = 1;
            foreach ($data_dosen as $dosen) {
                $content .= '
                    <tr>
                        <td>'. $no++.'</td>
                        <td>'. $dosen['nidn'].'</td>
                        <td>'. $dosen['nama'].'</td>
                        <td>'. $dosen['mk'].'</td>
                        <td>'. $dosen['jn'].'</td>
                        <td>'. $dosen['email'].'</td>
                        <td>'. $dosen['alamat'].'</td>
                        <td>'. $dosen['tlepon'].'</td>
                    </tr>
                ';
            }
        
        
$content .='
        </table>
</page>';

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
ob_start();
$html2pdf->output('Laporan-mahasiswa.pdf');


?>