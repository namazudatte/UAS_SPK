<?php
include('config.php');
include('fungsi.php');

include('header.php');
?>
<section class="content">
    <h2 class="ui header">Perbandingan Kriteria</h2>
    <?php showTabelPerbandingan('kriteria', 'kriteria'); ?>
</section>
<section>
    <h2></h2>
    <h2></h2>
    <h2></h2>
    <h2></h2>
    <h2></h2>
</section>
<section>
    <table border="1">
        <tr>
            <th>Kedisiplinan Mahasiswa</th>
            <th>Keterlibatan Dalama Kegiatan</th>
            <th>Pelanggaran Tata Tertib</th>
            <th>Sosial</th>
            <th>Tanggung Jawab Terhadap Tugas</th>
        </tr>
        <tr style="text-align:center">
            <td>1</td>
            <td>5</td>
            <td>9</td>
            <td>3</td>
            <td>7</td>
    </table>
</section>

<?php include('footer.php'); ?>