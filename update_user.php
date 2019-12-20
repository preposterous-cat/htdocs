<?php
  include "koneksi.php";

  $id=$_POST['id_tamu'];
  $nama_tamu=$_POST['nama_tamu'];
  $ketemu_siapa=$_POST['ketemu_siapa'];
  $bagian_unit=$_POST['bagian_unit'];
  $tujuan=$_POST['tujuan'];
  $no_hp=$_POST['no_hp'];
  $email=$_POST['email_tamu'];
  $alamat=$_POST['alamat'];
  $tanggal=$_POST['tanggal'];
  $tanggal=date('d-m-Y', strtotime($tanggal));

  $sql="UPDATE `tb_pengunjung` SET `nama_tamu`='$nama_tamu'
  ,`ketemu_siapa`='$ketemu_siapa',`bagian_unit`='$bagian_unit',
  `tujuan`='$tujuan',`handphone`='$no_hp',`email`='$email',`alamat`='$alamat',
  `tanggal`='$tanggal' WHERE `id_bukutamu`='$id'";

  if (mysqli_query($koneksi, $sql)) {
    echo "<script>
    window.alert('Data berhasil diperbarui!');
    window.location.href='data_user.php';
    </script>";
  }else {
    echo "<script>
    window.alert('Data tidak berhasil diperbarui')
    window.location.href='data_user.php';
    </script>";
  }
 ?>
