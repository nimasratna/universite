<!doctype html>
<html>
	<head>
		<title> <?php echo (isset($ap_title)) ? $ap_title : 'Universite'; ?> </title>
		<?php $this->render_css(array('bootstrap.min.css','bootstrap-responsive.min.css'));?>
		<?php $this->render_less('style') ?>
		<?php $this->render_js('jquery.js') ?>
		<?php $this->render_js('jquery.gal.min.js') ?>
	</head>
	<body>
		<div class="container main">
			<header class="row-fluid header">
				<!-- Header Logo -->
				<div class="span4">
					<p class="lead"><?php $this->render_img('sima.png') ?> <small><b><i>Sistem Informasi Mahasiswa</i></b></small></p>
				</div>
				<div class="span8">
					<nav class="row">
						<!-- Navigation -->
						<div class="span12">
							<ul class="nav nav-pills">		
								<?php if($this->session->userdata('logged_in') == true) : ?>
								<li><?php echo anchor('home','<i class="icon-home icon-white"></i> Beranda') ?></li>
								<li><?php echo anchor('profil','<i class="icon-user icon-white"></i> Profil') ?></li>
								<li><?php echo anchor('pengumuman','<i class="icon-bullhorn icon-white"></i> Pengumuman') ?></li>
								<li><?php echo anchor('akademik','<i class="icon-book icon-white"></i> Akademik') ?></li>
								<?php endif; ?>

							</ul>
						</div>
					</nav>
				</div>
			</header>
		
