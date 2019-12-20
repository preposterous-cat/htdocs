<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dinas Kominfo</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">

    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">KOMINFO SUMSEL</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">HOME</a></li>
                            <li><a class="color_animation" href="#book">ACCOUNT</a></li>
                            <li><a class="color_animation" href="#charts">CHARTS</a></li>
                            <li><a class="color_animation" href="#come">ABOUT</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>

        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h4 class="white second-title"> DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI SUMATERA SELATAN </h4>
                    <h2 class="white second-title">" Terima Kasih Atas Kunjungan Anda "</h2>
                    <hr>
                </div>
            </div>
        </div>

       <!-- ============ Account  ============= -->

        <section  id="book"  class="description_content">
            <div class="reservation background_content">
                <h1>Buku Tamu</h1>
            </div>
            <div class="text-content container">
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form method="POST" action="input_user.php">
                          <div class="container">
													<?php
														include "camera.php";
													 ?>
                         </div>
        <table align="center" border="3">
            <tr class="b">
                <td colspan="3" align="center" class="c"> Formulir Pengunjung </td>
            </tr>

						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama_tamu" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Orang yang Ditemui</td>
							<td>:</td>
							<td><input type="text" name="ketemu_siapa" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Bagian Unit</td>
							<td>:</td>
							<td>
							<select name="bagian_unit">
								<option value="Kepala Dinas">Kepala Dinas</option>
								<option value="Sekretaris">Sekretaris</option>
								<option value="Bidang Pengelolaan Informasi Publik">Bidang Pengelolaan Informasi Publik</option>
								<option value="Bidang Pengelolaan Komunikasi Publik">Bidang Pengelolaan Komunikasi Publik</option>
								<option value="Bidang Teknologi, Informasi dan Persandian">Bidang Teknologi, Informasi dan Persandian</option>
								<option value="Bidang Layanan E-goverment">Bidang Layanan E-goverment</option>
								<option value="Bidang Statistik">Bidang Statistik</option>
							</select>
						</td>
						</tr>
			      <tr>
							<td>Tujuan</td>
							<td>:</td>
							<td><input type="text" name="tujuan" autocomplete="off"></td>
						</tr>
			      <tr>
							<td>Nomor Handphone</td>
							<td>:</td>
							<td><input type="text" name="no_hp" autocomplete="off"></td>
						</tr>
			      <tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="text" name="email_tamu" autocomplete="off"></td>
						</tr>
			      <tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" autocomplete="off"></td>
						</tr>
			      <tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><input type="date" name="tanggal" value="<? echo date('Y-m-d'); ?>" readonly></td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3" align="left">
								<input type="submit" value="SIMPAN">
								<input type="reset" value="CANCEL">
							</td>
						</tr>
        </table>
    </form>
        </section>

       <!-- ============ Charts  ============= -->

       <section id ="charts" class="description_content">
            <div  class="beer background_content">
                <h1>Data Statistik</h1>
            </div>
            <div class="text-content container">
                <div class="col-md-5">
                   <div class="img-section">
                       <img src="images/kp3.jpeg" width="100%">
                   </div>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-1">
                    <h1>Grafik Kunjungan</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text">BELOM</p>
                </div>
            </div>
        </section>


        <!-- ============ About  ============= -->

        <section id="come" class="description_content">
            <div  class="featured background_content">
                <h1>About Us</h1>
            </div>
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>Dinas Komunikasi dan Inforrmatika</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">Ini ceritanya.....</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/b.jpeg"  alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/aaa.jpeg" alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/images.png" alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>


        <!-- ============ Social Section  ============= -->

        <section class="social_connect">
            <div class="text-content container">
                <div class="col-md-6">
                    <span class="social_heading">FOLLOW</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">OR DIAL</span>
                    <span class="social_info"><a class="color_animation" href="tel:883-335-6524">(+62)813 6681 4588</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <h2>Kritik Dan Saran</h2>
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div><!-- End Right Inputs -->
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button>
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
                </div>
            </div>
        </section>



        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Dinas Komunikasi dan Informatika</p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Kerja Praktik UNSRI</p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
    </html>
