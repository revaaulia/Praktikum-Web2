<?php
$ns1 = ['id'=>1,'nim'=>"01101",'uts'=>80,'uas'=>90,'tugas'=>95];
$ns2 = ['id'=>2,'nim'=>"01102",'uts'=>85,'uas'=>93,'tugas'=>80];
$ns3 = ['id'=>3,'nim'=>"01103",'uts'=>87,'uas'=>95,'tugas'=>85];

// simpan variable data array assosiatif ke dalam array indexing
$ar_nilai = [$ns1, $ns2, $ns3];

?>

<!-- buat table dengan elemen html -->
<center><h3>Daftar Nilai Mahasiswa</h3></center>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>NILAI AKHIR</th>
        </tr>
    <thead>
    <tbody>
        <?php 
        $nomor = 1;
        foreach ($ar_nilai as $nilai) {
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>' .$nilai['nim'].'</td>';
            echo '<td>' .$nilai['uts'].'</td>';
            echo '<td>' .$nilai['uas'].'</td>';
            echo '<td>' .$nilai['tugas'].'</td>';

            // tuliskan perhitungan nilai akhir di sini
            
            $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
            $nilai_format = number_format($nilai_akhir,2,',','.');            
            echo "<td>$nilai_format</td>";
            echo '<tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>