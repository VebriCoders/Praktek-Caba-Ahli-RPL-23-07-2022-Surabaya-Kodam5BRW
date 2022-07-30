<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Formulir Pendaftaran - TNI AD</title>

	<!-- Assets Bootstrap -->
	<link href="assets/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div id="container">
		<h1><b>Formulir Pendaftaran!</b></h1>

		<div id="body">
			<p>Masukkan Data Pendaftaran Dengan Benar Dan Sesuai Data Diri Anda!.</p>

			<div class="row">
				<div class="col-lg-6">
					<div class="panel">

						<form>

							<div class="form-group">
								<label for="label-nama" class="col-md-3 col-form-label">Nama</label>
								<input type="email" name="nama_lengkap" id="label-nama" placeholder="Masukkan Nama Peserta" required style="width: 350px">
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label">Jenis Kelamin</label>
								<div class="radio">
									<input id="select-pria" class="magic-radio" value="1" type="radio" name="jenis_kelamin" style="margin-left:1px" required>
									<label for="select-pria">Pria</label>

									<input id="select-wanita" class="magic-radio" value="2" type="radio" name="jenis_kelamin" style="margin-left:50px" required>
									<label for="select-wanita" style="margin-left:50px">Wanita</label>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label">Alamat</label>
								<textarea name="alamat" cols="50" rows="10" required></textarea>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label">Agama</label>

								<select name="agama" style="width: 350px; height: 50px" required>
									<option value="islam">ISLAM</option>
									<option value="kristen">KRISTEN</option>
									<option value="hindu">HINDU</option>
									<option value="budha">BUDHA</option>
									<option value="konghucu">KONGHUCU</option>
								</select>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-success">Save</button>
							</div>
						</form>


					</div>
				</div>
			</div>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>

</html>