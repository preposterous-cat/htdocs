<?php
  include "koneksi.php";

  $id=$_GET['id'];

  $sql="DELETE FROM `tb_pengunjung` WHERE `id_bukutamu`=$id";

  if (mysqli_query($koneksi, $sql)) {
    echo "<script>
    window.alert('Data berhasil dihapus!');
    window.location.href='data_user.php';
    </script>";
  }else {
    echo "<script>
    window.alert('Data tidak berhasil dihapus')
    window.location.href='data_user.php';
    </script>";
  }
 ?>
