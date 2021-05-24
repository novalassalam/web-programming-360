<?php echo form_open(base_url('Cek/edit_proses?id=' . $isi->id_user), 'class="email" id="myform"'); ?>
<label for="nama">nama user</label>
<input name="nama" id="nama" type="text" value="<?php echo $isi->nama_user; ?>">
<br>
<button type="submit">simpan</button>
<?php echo form_close(); ?>