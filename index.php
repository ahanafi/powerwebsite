<?php
require_once 'function/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Central Processing Unit</title>
</head>
<link rel="stylesheet" href="<?= base('assets/css/gaya.css'); ?>">
<link rel="stylesheet" href="<?= base('assets/css/bootstrap.css'); ?>">
<script type="text/javascript" src="<?= base('assets/js/jquery-2.2.3.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base('assets/js/script.js'); ?>"></script>
<script type="text/javascript" src="<?= base('assets/js/jquery.malihu.PageScroll2id.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base('assets/js/bootstrap.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(window).on("load", function() {
			$("a[rel='m_PageScroll2id']").mPageScroll2id();
		});
		$(".modal-lg").css({
			'width':'90%'
		});
		$(".modal-title").css({
			'font-weight':'bold'
		});
	});
</script>
<body>
	<div id="section-homescreen">
		<div class="bg-box">
			<h1><u>"Central Processing Unit"</u></h1>
			oleh  :
			<br>
			<b>Ahmad Hanafi</b>
		</div>
		<center>
			<button class="circle" id="button-fly"><a href="#section-materi" rel="m_PageScroll2id"><span class="glyphicon glyphicon-send"></span></a></button>
		</center>
	</div>
	<div id="section-materi">
		<div class="container">
			<div class="first-slide" id="first-slide">
				<header>WHAT'S THE CPU ?</header>
				<main>
					<div class="col-md-8 content" style="text-align: justify;">
						&nbsp;
						&nbsp;
						<strong>CPU (Central Processing Unit)</strong> adalah otak/sumber dari komputer yang mengatur dan memproses seluruh kerja komputer. CPU ini berbentuk IC yang diberi nama sesuai dengan tipenya.
						<br>
						<strong>Contohnya : </strong>
						<ul>
							<li>8088 untuk PCXT</li>
							<li>80286 untuk PCAT</li>
							<li>Pentium IV</li>
							<li>dsb.</li>
						</ul>
					</div>
					<div class="col-md-4 pict">
						<img src="<?= base('images/micropro.png'); ?>" alt="" class="img img-responsive" style="margin: 80px auto 50px auto;">
					</div>
				</main>
			</div>
			<center>
				<button class="circle next2slide2"><a href="#section-homescreen" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-up"></span></a></button>
				<button class="circle next2slide2"><a href="#second-slide" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-down"></span></a></button>
			</center>
		</div>
		<div id="second-slide">
			<header>
				FUNGSI CPU
			</header>
			<div class="container">
				<main>
					<div class="col-md-8 content" style="text-align: justify;">
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						<strong>Fungsi Utama : </strong> Menjalankan program-program yang disimpan di Memory Utama. <p></p>Hal ini dilakukan dengan cara mengambil instruksi-instruksi dari memori utama dan mengeksekusinya satu persatu sesuai dengan alur perintah. Pekerjaan ini dilakukan dalam dua tahapan yaitu membaca instruksi (fetch) dan melaksanakan instruksi tersebut (execute).
					</div>
					<div class="col-md-4">
						<img src="<?= base('images/function2.png'); ?>" alt="" class="img img-responsive" style="padding-top: 60px;">
					</div>
				</main>
			</div>
			<center>
				<button class="circle next2slide3"><a href="#section-materi" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-up"></span></a></button>
				<button class="circle next2slide3"><a href="#third-slide" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-down"></span></a></button>
			</center>
		</div>
		<div id="third-slide">
			<div class="container">
				<header>SIKLUS FETCH &amp; EXECUTE</header>
				<main>
					<div class="col-md-8 content">
						<ul>
							<li>CPU membaca data dari Memory utama.</li>
							<li>Sebuah register (Program Counter) melakukan pengawasan dan menghitung instruksi selanjutnya</li>
							<li> Ketika CPU membaca sebuah instruksi, PC akan menambah satu hitungannya.</li>
							<li>Kemudian instruksi-instruksi yang dibaca tersebut akan dimuat dalam suatu register -> Register Instruksi (IR).</li>
							<li>Setelah itu, CPU akan melakukan interpretasi dan melakukan aksi yang sesuai dengan instruksi tersebut.</li>
						</ul>
					</div>
					<div class="col-md-4"><img src="<?= base('images/siklus.png'); ?>" alt="" class="img img-responsive"></div>
				</main>
			</div>
			<center>
				<button class="circle next2slide4"><a href="#second-slide" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-up"></span></a></button>
				<button class="circle next2slide4"><a href="#fourth-slide" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-down"></span></a></button>
			</center>
		</div>
		<div id="fourth-slide">
			<div class="container">
				<header>SIKLUS INSTRUKSI</header>
				<main>
					<div class="col-md-8 content">
					<ol>
						<li>
							<strong>Instruction Addess Calculation (IAC)</strong> yaitu mengkalkulasi atau menentukan alamat instruksi berikutnya yang akan dieksekusi.
						</li>
						<li>
							<strong>Instruction Fetch (IF)</strong> yaitu membaca lokasi memorinya ke CPU
						</li>
						<li>
							<strong>Instruction Operation Decoding (IOD)</strong> yaitu menganalisa instruksi dan operand yang akan digunakan.
						</li>
						<li>
							<strong>Operand Address Calculation (OAC)</strong>  yaitu menentukan alamat operand.
						</li>
						<li>
							<strong>Operand Fetch (OF)</strong> adalah mengambil operand dari memori.
						</li>
						<li>
							<strong>Data Operation (DO)</strong> yaitu membentuk operasi yang diperintahkan dalam instruksi.
						</li>
						<li>
							<strong>Operand store (OS)</strong> yaitu menyimpan hasil eksekusi ke dalam memori.
						</li>
					</ol>
					</div>
					<div class="col-md-4">
						<img src="<?= base('images/cycle.png'); ?>" alt="" class="img"  style="width: 100%;">
					</div>
				</main>
			</div>
			<center>
				<button class="circle next2slide4"><a href="#third-slide" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-up"></span></a></button>
				<button class="circle next2slide4"><a href="#five-slide" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-down"></span></a></button>
			</center>
		</div>
		<div id="five-slide">
			<div class="container">
				<header>COMPONENT OF CPU</header>
				<main>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<img src="<?= base('images/comp-1.png'); ?>" alt="" class="img img-responsive">
							</div>
							<div class="panel-footer">
								<strong><a href="" data-toggle="modal" data-target="#comp-1">CONTROL UNIT</a></strong>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<img src="<?= base('images/comp-2.png'); ?>" alt="" class="img img-responsive">
							</div>
							<div class="panel-footer">
								<strong><a href="#" data-toggle="modal" data-target="#comp-2">REGISTER</a></strong>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<img src="<?= base('images/math_manual.png'); ?>" alt="" class="img img-responsive">
							</div>
							<div class="panel-footer">
								<strong><a href="#" data-toggle="modal" data-target="#comp-3">ARITMETHIC LOGICAL UNIT</a></strong>
							</div> <!-- end of class panel footer -->
						</div> <!-- end of class panel -->
					</div> <!-- end of class col md 4 -->
					<center>
						<a href="#fourth-slide" rel='m_PageScroll2id' class="btn btn-primary btn-lg" id="btn-prev">PREV</a>
						<a href="#how-to-work" rel='m_PageScroll2id' class="btn btn-primary btn-lg" id="btn-next">NEXT</a>
					</center>
				</main> <!-- end of tag main -->
			</div> <!-- end of class container -->
		</div> <!-- end of id five slide -->
		<div id="how-to-work" class="end-slide">
			<div class="container">
				<header>
					HOW IT WORK ?
				</header>
				<main>
					<video type="mp4/video" controls>
						<source src="files/video1.mp4">
					</video>
				</main>
				<br>
				<button class="circle next2slide2"><a href="#five-slide" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-up"></span></a></button>
				<button class="circle next2slide2"><a href="#section-question" rel='m_PageScroll2id'><span class="glyphicon glyphicon-chevron-down"></span></a></button>
			</div>
		</div>
	</div> <!-- end of id section materi -->
	<div id="section-question">
		<div class="container">
			<div class="col-md-12">
				<h1>ANY QUESTIONS ?</h1>
			</div>
		</div>
	</div>
	<button class="btn btn-primary btn-lg" id="btn-home" data-toggle="tooltip" data-placement="top" title="Back to Top">
		<a href="#section-homescreen" rel='m_PageScroll2id'><span class="glyphicon glyphicon-home"></span></a>
	</button>
	<button class="btn btn-danger btn-lg" id="btn-about" data-toggle="tooltip" data-placement="left" title="About Me">
		<a href="aboutme.html" target="_blank"><span class="glyphicon glyphicon-user"></span></a>
	</button>
	<footer>
		Copyriht &copy; <?= date('Y'); ?> All Rights Reserved . Develop by <a href="https://www.facebook.com/ahmaddhanavie" class="btn-link" target="_blank" style="color: #fff;font-weight: bold;">Ahmad Hanafi</a>
	</footer>
	<div class="modal fade" id="comp-1" role="dialog" aria-labelledby="comp-1-label">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="comp-1-label">CONTROL UNIT</h2>
				</div> <!-- end of modal header -->
				<div class="modal-body">
					<strong>Fungsi : </strong> Mengatur/mengontrol jalannya suatu program. CU bertugas mengontrol komputer sehingga terjadi sinkronisasi kerja antar komponen dalam menjalankan fungsi-fungsi operasinya.
					<hr>
					<strong>Tugas Control Unit : </strong>
					<br>
					<br>
					<ul class="list-group">
						<li class="list-group-item">Mengatur dan mengendalikan alat-alat input dan output</li>
						<li class="list-group-item">Mengambil instruksi-instruksi dari memori utama.</li>
						<li class="list-group-item">Mengambil data dari memori utama (jika diperlukan) untuk diproses.</li>
						<li class="list-group-item">Mengirim instruksi ke ALU bila ada perhitungan aritmatika atau perbandingan logika serta mengawasi kerja dari ALU.</li>
						<li class="list-group-item">Menyimpan hasil proses ke memori utama.</li>
					</ul>
				</div> <!-- end of class modal body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div> <!-- end of class modal footer -->
			</div> <!-- end of class modal content -->
		</div> <!-- end of class modal dialog -->
	</div> <!-- end of class modal fade -->
	<div class="modal fade" id="comp-2" role="dialog" aria-labelledby="comp-2-label">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="comp-2-label">REGISTER</h2>
				</div> <!-- end of modal header -->
				<div class="modal-body">
					Merupakan <strong><i>alat penyimpanan kecil yang mempunyai kecepatan akses cukup tinggi</i></strong>, yang digunakan untuk menyimpan data dan/atau instruksi yang sedang diproses. Memori ini bersifat sementara, biasanya di gunakan untuk menyimpan data saat di olah ataupun data untuk pengolahan selanjutnya.
				</div> <!-- end of class modal body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div> <!-- end of class modal footer -->
			</div> <!-- end of class modal content -->
		</div> <!-- end of class modal dialog -->
	</div> <!-- end of class modal fade -->
	<div class="modal fade" id="comp-3" role="dialog" aria-labelledby="comp-3-label">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="comp-3-label">ARITMETHIC LOGICAL UNIT</h2>
				</div> <!-- end of modal header -->
				<div class="modal-body">
					yang bertugas untuk melakukan operasi <strong><i>aritmetika</i></strong> dan operasi <strong><i>logika</i></strong> berdasar instruksi yang ditentukan. ALU sering di sebut <u><i>mesin bahasa</i></u> karena bagian ini ALU terdiri dari dua bagian, yaitu unit arithmetika dan unit logika boolean (T/F) yang masing-masing memiliki spesifikasi tugas tersendiri
				</div> <!-- end of class modal body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div> <!-- end of class modal footer -->
			</div> <!-- end of class modal content -->
		</div> <!-- end of class modal dialog -->
	</div> <!-- end of class modal fade -->
</body>
</html>