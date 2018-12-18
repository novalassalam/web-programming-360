	<script src="<?php echo base_url('assets/Template/admin/plugins/jquery/jquery.min.js') ;?>"></script>
	<script type="text/javascript">
		$(function() {
			$('#link a').click(function() {
				var url = $(this).attr('href');
				$('#hasil').load(url);
				return false;
			});
		});
	</script>
	<style type="text/css">
	
	#hasil { line-height: 20px; width: 500px; height: 500px; margin: 20px 0; padding: 10px; border: 1px solid #999; }
	ul { padding: 0 }
	li { display: inline; margin: 0 3px; }

</style>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div>
				<div id="link">
					<ul>
						<li class="btn btn-warning"><a href="<?php echo base_url('Welcome/ajax_link/1');?>">link 1</a></li>
						<li class="btn btn-warning"><a href="<?php echo base_url('Welcome/ajax_link/2');?>">link 2</a></li>
					</ul>
				</div>

				<div id="hasil">
					Isi dari file content.php akan ditampilkan di sini
				</div>
			</div>
		</div>
	</div>
</section>
