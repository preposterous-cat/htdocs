<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<style type="text/css">
		* {box-sizing: border-box;}
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
		  overflow: hidden;
		  background-color: #e9e9e9;
		}

		.topnav a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #2196F3;
		  color: white;
		}

		.topnav .search-container {
		  float: right;
		}

		.topnav input[type=text] {
		  padding: 6px;
		  margin-top: 8px;
		  font-size: 17px;
		  border: none;
		}

		.topnav .search-container button {
		  float: right;
		  padding: 6px 10px;
		  margin-top: 8px;
		  margin-right: 16px;
		  background: #ddd;
		  font-size: 17px;
		  border: none;
		  cursor: pointer;
		}

		.topnav .search-container button:hover {
		  background: #ccc;
		}

		@media screen and (max-width: 600px) {
		  .topnav .search-container {
		    float: none;
		  }
		  .topnav a, .topnav input[type=text], .topnav .search-container button {
		    float: none;
		    display: block;
		    text-align: left;
		    width: 100%;
		    margin: 0;
		    padding: 14px;
		  }
		  .topnav input[type=text] {
		    border: 1px solid #ccc;
		  }
		table {
			width: 1000px;
			height: 50px;
			border-collapse: collapse;
			align-content: center;
			margin-top: 50px;
			}
			tr{
				background-color:white;
				color:blue;
			}
			td{
				text-align: center;
			}

			.a{
				text-align: center;
			}
			.b{
				background-color: white;
				color:white;
	            text-shadow: 1px 1px 2px black, 0 0 25px #004d00, 0 0 5px #4CAF50;
			}
			.c{
				font-weight: bold;
				font-size: 20px;
			}
		}
	</style>
</head>
<!-- <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
    <form action="kp6.php" method="POST">
      <input type="text" placeholder="search" name="cari">
      <button type="submit"><i class="search"></i></button>
    </form>
  </div>
</div> -->
<br>
<form  action ="searching.php" method = "POST">
	<input type="text" name="search" id="cari">
	<input type="submit" value="search">
</form>
<body bgcolor="white">
	<table border="3" align="center">
		<tr class="b">
			<td colspan="12" align="center" class="c">DATA PENGUNJUNG</td>
		</tr>

		<tr class="a">
			<th>Nomor</th>
	        <th>Nama Tamu</th>
	        <th>Orang yang Ditemui</th>
	        <th>Bagian Unit</th>
	        <th>Tujuan</th>
	        <th>Nomor Handphone</th>
	        <th>Email</th>
	        <th>Alamat</th>
	        <th>Tanggal Kunjungan</th>
					<th>Hari</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>Foto</th>
	        <th>Keterangan</th>
		</tr>
		<?php
	        include "koneksi.php";
	        $no=1;
	        $sql="SELECT * FROM tb_pengunjung";
	        $data=mysqli_query($koneksi, $sql);
	        while ($d=mysqli_fetch_array($data)) {
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
			<a href="index.php">Kembali ke halaman form</a>
			</td>
		</tr>
		</table>
    </div>


    <div style="width: 800px;margin: 0px auto;">
      <canvas id="myChart">Statistik Harian</canvas>
      <br/>
    </div>
    <div style="width: 800px;margin: 0px auto;">
      <canvas id="myChart2">Statistik Harian</canvas>
      <br/>
    </div>
    </div>
    <script>
    window.onload=function(){
		    var ctx = document.getElementById("myChart").getContext('2d');
        var ctx2 = document.getElementById("myChart2").getContext('2d');

		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
				datasets: [{
					label: '',
					data: [
					<?php
					$jumlah_senin = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `hari`='Senin'");
					echo mysqli_num_rows($jumlah_senin);
					?>,
					<?php
					$jumlah_selasa = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `hari`='Selasa'");
					echo mysqli_num_rows($jumlah_selasa);
					?>,
					<?php
					$jumlah_rabu = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `hari`='Rabu'");
					echo mysqli_num_rows($jumlah_rabu);
					?>,
					<?php
					$jumlah_kamis = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `hari`='Kamis'");
					echo mysqli_num_rows($jumlah_kamis);
					?>,
          <?php
					$jumlah_jumat = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `hari`='Jumat'");
					echo mysqli_num_rows($jumlah_jumat);
					?>,
          <?php
					$jumlah_sabtu = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `hari`='Sabtu'");
					echo mysqli_num_rows($jumlah_sabtu);
					?>,
          <?php
					$jumlah_minggu = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `hari`='Minggu'");
					echo mysqli_num_rows($jumlah_minggu);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
          'rgba(90, 100, 192, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(254, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
          'rgba(90, 100, 192, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(254, 192, 192,1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
    //Statistik Bulanan

    var myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
                "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
          label: '',
          data: [
          <?php
          $jumlah_januari = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Januari'");
          echo mysqli_num_rows($jumlah_januari);
          ?>,
          <?php
          $jumlah_februari = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Februari'");
          echo mysqli_num_rows($jumlah_februari);
          ?>,
          <?php
          $jumlah_maret = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Maret'");
          echo mysqli_num_rows($jumlah_maret);
          ?>,
          <?php
          $jumlah_april = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='April'");
          echo mysqli_num_rows($jumlah_april);
          ?>,
          <?php
          $jumlah_mei = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Mei'");
          echo mysqli_num_rows($jumlah_mei);
          ?>,
          <?php
          $jumlah_juni = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Juni'");
          echo mysqli_num_rows($jumlah_juni);
          ?>,
          <?php
          $jumlah_juli = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Juli'");
          echo mysqli_num_rows($jumlah_juli);
          ?>,
          <?php
          $jumlah_agustus = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Agustus'");
          echo mysqli_num_rows($jumlah_agustus);
          ?>,
          <?php
          $jumlah_september = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='September'");
          echo mysqli_num_rows($jumlah_september);
          ?>,
          <?php
          $jumlah_oktober = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Oktober'");
          echo mysqli_num_rows($jumlah_oktober);
          ?>,
          <?php
          $jumlah_november = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='November'");
          echo mysqli_num_rows($jumlah_november);
          ?>,
          <?php
          $jumlah_desember = mysqli_query($koneksi,"SELECT * FROM `tb_pengunjung` WHERE `bulan`='Desember'");
          echo mysqli_num_rows($jumlah_desember);
          ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(90, 100, 192, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(254, 192, 192, 0.2)',
          'rgba(100, 200, 20, 0.2)',
          'rgba(10, 20, 30, 0.2)',
          'rgba(101, 105, 110, 0.2)',
          'rgba(50, 50, 200, 0.2)',
          'rgba(100, 200, 150, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(90, 100, 192, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(254, 192, 192,1)',
          'rgba(100, 200, 20, 1)',
          'rgba(10, 20, 30, 1)',
          'rgba(101, 105, 110, 1)',
          'rgba(50, 50, 200, 1)',
          'rgba(100, 200, 150, 1)'
          ],
          borderWidth: 1
        }]
      },
    }]
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
        }
      }
    });
  };
	</script>

  </body>
</html>
