<?php

require __DIR__.'/vendor/autoload.php';
require 'config/app.php';


use Spipu\Html2Pdf\Html2Pdf;

$data_taa = select("SELECT * FROM taa");

$content .= '
<page>
        <table border="1" align="center">
            <tr>
                <th> NO </th>
                <th> NO TA </th>
                <th> JUDUL</th>
                <th> MAHASISWA </th>
                <th> PEMBIMBING </th>
            </tr>';

            $no = 1;
            foreach ($data_taa as $taa) {
                $content .= '
                    <tr>
                        <td>'. $no++.'</td>
                        <td>'. $taa['nota'].'</td>
                        <td>'. $taa['judul'].'</td>
                        <td>'. $taa['mahasiswa'].'</td>
                        <td>'. $taa['pembimbing'].'</td>
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