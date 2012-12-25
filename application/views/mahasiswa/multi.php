<div class="row">
	<div class="span12">
		<?php echo form_open('mhs/search',array('class'=>'form-search', 'method'=>'GET')); ?>
		<legend>Listing Data Mahasiswa</legend>
		<div class="control-group">
			<input type="search" name="search" placeholder="search" class="input-medium search-query"/>
			<button type="submit" class="btn"> Search </button>
		</div>
		<?php echo form_close();?>
		<p>
			<small>*) Gunakan form pencarian untuk menemukan data mahasiswa sesuai dengan NIMnya</small>
		</p>
		</form>
	</div>
</div>