<div id="wrapper">
<div id="box">
    <div id="top_header">
      <h3>SIA</h3>
      <h5>Sistem Informasi Akademik</h5>
		<?php echo form_open('web/login'); ?>
		<div id="inputs">
			<?php echo form_input($username); ?>
			<?php echo form_input($password); ?>
		<?php echo form_submit('submit', 'Masuk', ' class="btn-kirim-login"');?> 
		</div>
		<?php echo form_close(); ?>
	</div>
	<div id="bottom">
	<p>Lupa password? Hubungi Rektor</p> 
	<p class="footer">
	Sistem Informasi Akademik Online <br /> 
	Developer : Ekoseven.com </br>Powered by Codeigniter </br>
	Halaman ini dimuat selama <strong>{elapsed_time}</strong> detik
	</p>
	</div>
    </div>
  </div>