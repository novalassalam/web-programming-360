<?php
include('session.php');
?>
<?php include "header.php";?>

<div class="badan">
	<div class="content">
		<p class="subjudul">CONTENT</p>
		<hr>
		<a href="create.php">Tambah</a>
		<br>
		<h1>Welcome <?php echo $login_session['email']; ?></h1>
		<?php
                    // Include config file
		require_once "config.php";

                    // Attempt select query execution
		$sql = "SELECT * FROM user join kota on user.id_kota = kota.id_kota";
		$no = 1;
		if($result = $mysqli->query($sql)){
			if($result->num_rows > 0){ ?>
				<table border=2>
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Tinggal</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while($row = $result->fetch_object()){ ?>
							<tr>
								<td><?php echo $no++ ;?> </td>
								<td><?php echo $row->nama_user ;?></td>
								<td><?php echo $row->email_user ;?></td>
								<td><?php echo $row->nama_kota ;?></td>
								<td>
									<a href='read.php?id=<?php echo $row->id_user;?>' title='View Record'>Lihat</a>
									<a href='update.php?id=<?php echo $row->id_user;?>' title='update Record'>Edit</a>
									<a href='delete.php?id=<?php echo $row->id_user;?>' title='delete Record' onclick="return  confirm('do you want to delete Y/N')">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>                            
				</table>
				<?php

				// $result->free();
			} else{
				echo "<p class='lead'><em>No records were found.</em></p>";
			}
		} else{
			echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
		}

                    // Close connection
		// $mysqli->close();
		?>

	</div>        


	<div class="sidebar">
		<p class="subjudul">SIDEBAR</p>
		<hr>
		<ul id="menu">
			<li><a href="file.php">uploadfile</a></li>
			<li><a href="bootstrap.php">bootstrap</a></li>
			<li><a href="#">Sidebar3</a></li>
			<li><a href="#">Sidebar4</a></li>
		</ul>
	</div>
</div>
<?php include "footer.php";?>