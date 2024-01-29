<?php
	include('config.php');
	include('fungsi.php');

	$jenis = $_GET['c'];

	include('header.php');
?>
<section class="content">
    <h2 class="ui header">Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis-1) ?></h2>
    <?php showTabelPerbandingan($jenis,'alternatif'); ?>
</section>
<section>
    <table border="1">
        <tr>
            <th>Kedua alternatif memiliki kepentingan yang sama</th>
            <th>Satu alternatif sedikit lebih penting daripada yang lain</th>
            <th>Satu alternatif jelas lebih penting daripada yang lain</th>
            <th>Satu alternatif sangat jelas lebih penting daripada yang lain</th>
            <th>Satu alternatif mutlak lebih penting daripada yang lain</th>
        </tr>
        <tr style="text-align:center">
            <td>1</td>
            <td>3</td>
            <td>5</td>
            <td>7</td>
            <td>9</td>
    </table>
</section>
<?php include('footer.php'); ?>