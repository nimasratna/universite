			<div class="row content">
				<div class="span4">
					<h3 class="lead">SIMA Universitas Muhammadiyah Malang</h3>
					<p>Selamat datang di SIMA (Sistem Informasi Mahasiswa Universitas Muhammadiyah Malang). Sistem ini digunakan sebagai gateway dan portal Mahasiswa untuk menyimpan data-data pribadinya terkait tentang informasi pribadi, akademik, keuangan dan kemahasiswaan di lingkungan Universitas Muhammadiyah Malang.</p>
					<p>Adapun sistem ini dapat digunakan untuk mengambil data dan mengolah data terkait tentang kegiatan mahasiswa yang dapat setiap saat berubah tanpa ada pemberitahuan secara langsung.</p>
				</div>
				<div class="span4" style="text-align:center">
					<?php $this->render_image('f_img.jpg', array('class'=>'img-circle')) ?>
				</div>
				<div class="span4">
					<?php if($this->session->flashdata('error')) : ?>
						<div class="alert alert-danger"> <?php echo $this->session->flashdata('error') ?> </div>
					<?php endif; ?>
					<?php echo form_open('auth', array('class'=>'form')) ?>
					<!-- <form class="form" method="POST" action="<?php echo base_url() ?>auth"> -->
						<legend>Autentikasi</legend>
						<div class="control-group">
							<label class="control-label">Username</label>
							<div class="controls">
								<input type="text" name="username" placeholder="username" class="span4" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Password</label>
							<div class="controls">
								<input type="password" name="password" placeholder="password" class="span4" />
							</div>
						</div>
						<div class="form-actions">
							<input type="submit" class="btn" value="Login" />
						</div>
					<!-- </form> -->
					<?php echo form_close(); ?>
				</div>
			</div>
			<div class="row content">
				<div class="span12 b-top-3">
					<h3 class="lead">Apa saja yang ada di sistem ini?</h3>
					<ul class="thumbnails">
						<li class="span3">
							<div class="thumbnail">
								<div class="caption">
									<h4 class="lead">Personal</h4>
									<p> Mahasiswa dapat melihat dan melakukan pembaharuan terhadap data pribadinya. </p>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<div class="caption">
									<h4 class="lead">Akademik</h4>
									<p> Mahasiswa dapat melihat jejak akademiknya dari setiap semester dan pada setiap matakuliah </p>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<div class="caption">
									<h4 class="lead">Portfolio</h4>
									<p> 
										Jejak kegiatan mahasiswa baik yang bersifat prestasi akademik dan non akademik tercatat disini
									</p>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<div class="caption">
									<h4 class="lead">Keuangan</h4>
									<p> Segala pembiayaan yang dilakukan dan diterima mahasiswa </p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>