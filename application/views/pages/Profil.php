<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Peacebroo</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="icon" href="assets/images/favicon.png" title="Peacebroo">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="assets/css/style.css" rel="stylesheet">
	</head>

	<!-- bagian popup-->

	<!-- popup upload file -->
	<input type="file" id="upload" name="upload" style="visibility: hidden; width: 1px; height: 1px" multiple />
	<!-- popup upload file -->

	<!--Popup update statusny-->
	<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				Update Keadaan
	      </div>
	      <div class="modal-body">
	          <form class="form center-block">
	            <div class="form-group">
	              <textarea class="form-control input-lg" autofocus="" placeholder="Apa yang kamu Renungkan?"></textarea>
	            </div>
	          </form>
	      </div>
	      <div class="modal-footer">
	          <div>
	          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Sebarkan</button>

							<ul class="pull-left list-inline">
								<li>
									<a href=""><i class="glyphicon glyphicon-upload" onclick="document.getElementById('upload').click(); return false"></i></a>
								</li>

								<li>
									<a href=""><i class="glyphicon glyphicon-camera"></i></a>
								</li>

								<li>
									<a href=""><i class="glyphicon glyphicon-map-marker"></i></a>
								</li>

						 </ul>
			  </div>
	      </div>
	  </div>
	  </div>
	</div>
	<!--Popup update statusny-->

	<!-- bagian popup-->

	<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-right">

            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

              <ul class="nav">
          			<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            	</ul>

               <center>
                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 1</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 2</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 3</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 4</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 5</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 6</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 7</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 8</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 9</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Teman 0</a></li>

                </ul></center>

              <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">

                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>

                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>

                </ul>

            </div>
            <!-- /sidebar -->

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">

                <!-- navigasi atas -->
              	<div class="navbar navbar-blue navbar-static-top">
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>

                      <!-- Bagian Logo -->
                      <a href="/" class="navbar-brand logo">P</a>
                      <!-- Bagian Logo -->

                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">

                  	<!-- Bagian Searching -->
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Cari Jodoh" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>

                    <ul class="nav navbar-nav">
                      <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i> Halaman Utama</a>
                      </li>
                      <li>
                        <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Status</a>
                      </li>
                      <li>
                        <a href="#"><span class="badge">Tombol</span></a>
                      </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right kirisedikit">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="">Pengaturan</a></li>
                          <li><a href="">Privacy</a></li>
                          <li><a href="">Halaman</a></li>
                          <li><a href="">Iklan</a></li>
                          <li><a href="">Keluar</a></li>
                        </ul>
                      </li>
                    </ul>

                  	</nav>

                </div>
                <!-- navigasi atas -->

                <div class="padding">
                    <div class="full col-sm-9">

                        <!-- content -->
                      	<div class="row">

                         <!-- main col left -->
                         <div class="col-sm-5">


                           	<!-- Bagian Foto Profile -->
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="assets/images/profile.jpg" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p class="lead">Da N Bo</p>
                                  <p>3125 Followers, 532 Posts</p>

                                  <p>
                                    <img src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s28" width="28px" height="28px">
                                  </p>
                                </div>
                              </div>
                              	<!-- Bagian Foto Profile -->

                              	<!-- Bagian Buat Status -->
                              	<div class="well">
                                   <form class="form-horizontal" role="form">
                                    <h4>Apa Yang Kamu Renungkan ?</h4>
                                     <div class="form-group" style="padding:14px;">
                                      <textarea class="form-control" placeholder="Tulis Di Sini"></textarea>
                                    </div>
                                    <button class="btn btn-primary pull-right" type="button">Sebarkan</button>

																		<ul class="list-inline">
																			<li>
																				<a href=""><i class="glyphicon glyphicon-upload" onclick="document.getElementById('upload').click(); return false"></i></a>
																			</li>

																			<li>
																				<a href=""><i class="glyphicon glyphicon-camera"></i></a>
																			</li>

																			<li>
																				<a href=""><i class="glyphicon glyphicon-map-marker"></i></a>
																			</li>
																		</ul>

                                  </form>
                              </div>
                              <!-- Bagian Buat Status -->

                              <div class="panel panel-default">
                                <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4>Intro</h4></div>
                                  <div class="panel-body">
                                    <div class="list-group">
                                      <a href="#" class="list-group-item">Sekolah</a>
                                      <a href="#" class="list-group-item">Alamat</a>
                                      <a href="#" class="list-group-item">Pekerjaan</a>
                                    </div>
                                  </div>
                              </div>

                            <!-- Update Email -->
                              <div class="well">
                                   <form class="form">
                                    <h4>Ubah Email</h4>
                                    <div class="input-group text-center">
                                    <input type="text" class="form-control input-lg" placeholder="Masukkan Email Baru">
                                      <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
                                    </div>
                                  </form>
                                </div>
                                <!-- Update Email -->

                              <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4>Foto Anda</h4></div>
                                  <div class="panel-body" style="padding-right: 60px; padding-bottom: 40px;">

                                    <img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>
																		<img src="assets/images/images.png" class="img-circle pull-right"> <a href="#"></a>


                                  </div>
                              </div>

															<!-- Bagian Tentang -->
                              <div class="panel panel-default">
                                <div class="panel-heading"><h4>Tentang Anda?</h4></div>
                               	<div class="panel-body">

                                	Pertanyaan ini pasti dan sering sekali ditanyakan pada awal wawancara kerja, baik saat wawancara kerja HR rekrutmen maupun User. Pertanyaan ini bertujuan untuk mengenal diri kalian lebih dalam lagi, dalam waktu yang cukup singkat.

                                 </div>
                              </div>
															<!-- Bagian Tentang -->

                          </div>

                          <!-- Bagian Utama -->
                          <div class="col-sm-7">

                               <!-- Bagian View Status -->
                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4>Da N Bo</h4></div>
                                  <div class="panel-body">

                                    <p>Terkadang, kamu berusaha menghindari sesuatu, bukan berarti kamu membencinya. Kamu menginginkannya tapi kamu tahu bahwa itu salah.</p>

                                    <hr>
                                    <form>
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Add a comment..">
                                    </div>
                                    </form>

                                  </div>
                               </div>
                               <!-- Bagian View Status -->

                                <!-- Bagian View Status -->
                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4>Da N Bo</h4></div>
                                  <div class="panel-body">

                                    <p>Jangan pernah meremehkan diri sendiri. Jika kamu tidak bahagia dengan hidupmu, perbaiki apa yang salah, dan teruslah melangkah.</p>

                                    <hr>
                                    <form>
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Add a comment..">
                                    </div>
                                    </form>

                                  </div>
                               </div>
                               <!-- Bagian View Status -->

                                <!-- Bagian View Status -->
                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4>Da N Bo</h4></div>
                                  <div class="panel-body">

                                    <p>Meratapi dan menyesali masa lalu tidak akan mengubah apa pun. Bangkit dan perbaiki setiap kesalahan yang ada.</p>

                                    <hr>
                                    <form>
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Add a comment..">
                                    </div>
                                    </form>

                                  </div>
                               </div>
                               <!-- Bagian View Status -->


                                <!-- Bagian View Status -->
                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4>Da N Bo</h4></div>
                                  <div class="panel-body">

                                    <p>Jika kalian gagal mendapatkan sesuatu, maka hanya satu hal yang harus kalian lakukan, coba lagi!</p>

                                    <hr>
                                    <form>
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Add a comment..">
                                    </div>
                                    </form>

                                  </div>
                               </div>
                               <!-- Bagian View Status -->


                                <!-- Bagian View Status -->
                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4>Da N Bo</h4></div>
                                  <div class="panel-body">

                                    <p>Jangan takut akan perubahan. Kita mungkin kehilangan sesuatu yang baik, namun kita akan peroleh sesuatu yang lebih baik lagi.</p>

                                    <hr>
                                    <form>
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Add a comment..">
                                    </div>
                                    </form>

                                  </div>
                               </div>
                               <!-- Bagian View Status -->

                          </div>
                       </div>
                       <!-- Bagian Utama -->


                        <!-- Bagian Footernya -->
                        <div class="row" id="footer">
                          <div class="col-sm-6">

                          </div>

                        </div>
                        <!-- Bagian Footernya -->

                      <hr>

                      <h4 class="text-center">
                      <p>672014113</p>
                      </h4>

                      <hr>
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>

	<!-- script references untuk jsnya -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>