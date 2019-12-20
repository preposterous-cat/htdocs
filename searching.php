<?php
	include "koneksi.php";
	if(isset(($POST['search']))){
		$cari = $_POST['search'];
		echo "<b>Hasil Pencarian : ".$cari."</b>";
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data User</title>
    <style type="text/css">
  </style>
  </head>

<body bgcolor="lightblue">
  <table border="3" align="center" >
  <tr class="b">
        <td colspan="12" align="center" class="c"> DAFTAR PENGUNJUNG </td>
      </tr>
  <tr class="a">
      <tr>
        <th>NO</th>
        <th>Nama Tamu</th>
        <th>Orang yang Ditemui</th>
        <th>Bagian Unit</th>
        <th>Tujuan</th>
        <th>Nomor Handphone</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Tanggal</th>
				<th>Hari</th>
				<th>Bulan</th>
				<th>Tahun</th>
				<th>Foto</th>
        <th>Keterangan</th>
      </tr>
      <?php
			$no=1;
	    if(isset($_POST['search'])){
	    	$cari = $_POST['search'];
	    	$sql = mysqli_query($koneksi, "SELECT * FROM `tb_pengunjung` where `id_bukutamu` = '$cari' OR
				`nama_tamu`='$cari' OR `ketemu_siapa`='$cari' OR `bagian_unit`='$cari' OR
				`tujuan`='$cari' OR `handphone`='$cari' OR `email`='$cari' OR `alamat`='$cari' OR
				`tanggal`='$cari'");
	    }
	    else{
	    	$sql = mysqli_query($koneksi, "SELECT * FROM `tb_pengunjung`");
	    }
	    while($d = mysqli_fetch_array($sql)){
	  ?>
          <tr>
            <td><? echo $no++;?></td>
            <td><? echo $d['nama_tamu']; ?></td>
            <td><? echo $d['ketemu_siapa']; ?></td>
            <td><? echo $d['bagian_unit']; ?></td>
            <td><? echo $d['tujuan']; ?></td>
            <td><? echo $d['handphone']; ?></td>
            <td><? echo $d['email']; ?></td>
            <td><? echo $d['alamat']; ?></td>
            <td><? echo $d['tanggal']; ?></td>
						<td><? echo $d['hari']; ?></td>
						<td><? echo $d['bulan']; ?></td>
						<td><? echo $d['tahun']; ?></td>
						<td><? echo '<img src="data:image/jpeg;base64,'.base64_encode($d['foto_pengunjung']).'" height="100" width="100"/>' ?></td>
						<td>
              <a href="index_update.php?id=<? echo $d['id_bukutamu']; ?>">Edit </a>
              <a href="delete_user.php?id=<? echo $d['id_bukutamu']; ?>">Hapus </a>
            </td>
          </tr>
        <?php
        }
       ?>
       <tr class="b">
  <td colspan="12" class="b" align="center">
  <a href="data_user.php"> Back To Page </a>
  </td></tr>
    </table>
  </body>
</html>
