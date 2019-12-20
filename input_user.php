<?php
  include "koneksi.php";
  $nama_tamu=$_POST['nama_tamu'];
  $ketemu_siapa=$_POST['ketemu_siapa'];
  $bagian_unit=$_POST['bagian_unit'];
  $tujuan=$_POST['tujuan'];
  $no_hp=$_POST['no_hp'];
  $email=$_POST['email_tamu'];
  $alamat=$_POST['alamat'];
  $tanggal1=$_POST['tanggal'];
  $tanggal=date('d-m-Y', strtotime($tanggal1));

  $dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
  );
  $hariNow=date('D');
  $hari=$dayList[$hariNow];

  $monthList = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
  );
  $bulanNow=date('m');
  $bulan=$monthList[$bulanNow];

  $tahun=date('Y');

  $foto=$_POST['image'];
  $folder="upload/";
  $foto_parts=explode(";base64,", $foto);
  $foto_type_aux=explode("image/", $foto_parts[0]);
  $foto_type=$foto_type_aux[1];

  $foto_base64= base64_decode($foto_parts[1]);
  $filename= $nama_tamu . '.png';
  $file=$folder . $filename;
  file_put_contents($file, $foto_base64);
  $file_final= addslashes(file_get_contents($file));
  $sql="INSERT INTO `tb_pengunjung` (`id_bukutamu`, `nama_tamu`, `ketemu_siapa`,
     `bagian_unit`, `tujuan`, `handphone`, `email`, `alamat`, `tanggal`, `foto_pengunjung`,
      `hari`, `bulan`, `tahun`)
     VALUES (Null, '$nama_tamu', '$ketemu_siapa', '$bagian_unit', '$tujuan',
       '$no_hp', '$email', '$alamat', '$tanggal', '$file_final', '$hari', '$bulan', '$tahun')";

  if (mysqli_query($koneksi, $sql)) {
    echo "<script>
            window.alert('Data berhasil disimpan!');
            window.location.href='data_user.php';
          </script>";
  }else {
    echo "<script>
            window.alert('Data tidak berhasil disimpan');

          </script>";
  }
 ?>
