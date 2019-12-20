<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
	<style type="text/css">
		table{
			width: 400px;
			height: 400px;
			border-collapse: collapse;
			align-content:
			center;
			padding: 20px;
			margin-top: 5px;
		}
		tr{
			background-color:blue;
			color: black;
		}
		.b{
			background-color: white;
			color: blue;
		}
		.c{
			align-content: center;
			font-weight: bold;
			font-size: 20px;
		}
		.a{
			text-align: center;
			background-color: white;
		}
	</style>

</head>
<body>
  <?
    include "koneksi.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM `tb_pengunjung` WHERE `id_bukutamu`=$id";
    $data=mysqli_query($koneksi, $sql);
    while ($d=mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="update_user.php">
  		<table align="center" border="3">
				<tr class="b">
					<td colspan="3" align="center" class="c">DATA UPDATE</td>
				</tr>

  			<tr>
  				<td>Nama</td>
					<td>:</td>
  				<td>
            <input type="hidden" name="id_tamu" value="<? echo $d['id_bukutamu']; ?>">
            <input type="text" name="nama_tamu" value="<? echo $d['nama_tamu']; ?>">
          </td>
  			</tr>
  			<tr>
  				<td>Orang yang Ditemui</td>
					<td>:</td>
  				<td><input type="text" name="ketemu_siapa" value="<? echo $d['ketemu_siapa']; ?>"></td>
  			</tr>
  			<tr>
  				<td>Bagian Unit</td>
					<td>:</td>
  				<td>
						<select name="bagian_unit">
							<option value="Kepala Dinas" <?php if ($d["bagian_unit"] == "Kepala Dinas"){ echo "selected=selected";} ?>> Kepala Dinas </option>";
							<option value="Sekretaris" <?php if ($d["bagian_unit"] == "Sekretaris"){ echo "selected=selected";} ?>> Sekretaris </option>";
							<option value="Bidang Pengelolaan Informasi Publik" <?php if ($d["bagian_unit"] == "Bidang Pengelolaan Informasi Publik"){ echo "selected=selected";} ?>> Bidang Pengelolaan Informasi Publik </option>";
							<option value="Bidang Pengelolaan Komunikas Publik" <?php if ($d["bagian_unit"] == "Bidang Pengelolaan Komunikas Publik"){ echo "selected=selected";} ?>> Bidang Pengelolaan Komunikas Publik </option>";
							<option value="Bidang Teknologi, Informasi dan Persandian" <?php if ($d["bagian_unit"] == "Bidang Teknologi, Informasi dan Persandian"){ echo "selected=selected";} ?>> Bidang Teknologi, Informasi dan Persandian </option>";
							<option value="Bidang Layanan E-goverment" <?php if ($d["bagian_unit"] == "Bidang Layanan E-goverment"){ echo "selected=selected";} ?>> Bidang Layanan E-goverment </option>";
							<option value="Bidang Statistik" <?php if ($d["bagian_unit"] == "Bidang Statistik"){ echo "selected=selected";} ?>> Bidang Statistik </option>";
  				</td>
  			</tr>
        <tr>
          <tr>
  				<td>Tujuan</td>
					<td>:</td>
  				<td><input type="text" name="tujuan" value="<? echo $d['tujuan']; ?>"></td>
  			</tr>
  				<td>Nomor Handphone</td>
					<td>:</td>
  				<td><input type="text" name="no_hp" value="<? echo $d['handphone']; ?>"></td>
  			</tr>
        <tr>
  				<td>Email</td>
					<td>:</td>
  				<td><input type="text" name="email_tamu" value="<? echo $d['email']; ?>"></td>
  			</tr>
        <tr>
  				<td>Alamat</td>
					<td>:</td>
  				<td><input type="text" name="alamat" value="<? echo $d['alamat']; ?>"></td>
  			</tr>
        <tr>
  				<td>Tanggal</td>
					<td>:</td>
  				<td><input type="date" name="tanggal" value="<? echo date('Y-m-d', strtotime($d['tanggal'])); ?>"></td>
  			</tr>
  			<tr>
					<td colspan="3" align="center">
						<input type="submit" value="SIMPAN">
						<input type="reset" value="CANCEL">
					</td>
  			</tr>
  		</table>
  	</form>
		<?php
    }
	?>


</body>
</html>
