<?php 
if ($this->uri->segment(3) == 'tambah') {
  $email = '';
  $nama = '';

  $id_kota = '';
  $aksi = base_url('Welcome/aksi/tambah/proses');
} else {
  $email = $isi->email_user;
  $nama = $isi->nama_user;

  $id_kota = $isi->id_kota;
  $aksi = base_url('Welcome/aksi/edit/proses?id=').$isi->id_user;
}


?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action="<?php echo $aksi;?>">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?php echo $email;?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nama user" name="nama" value="<?php echo $nama;?>">
              </div>

              <div class="form-group">
                <label>Kota</label>
                <select class="form-control" name="kota">
                  <option>-pilih kota-</option>

                  <?php 

                  foreach ($kota as $city) {
                    $selected = ($city->id_kota == $id_kota) ? 'selected' : '';
                   ?>

                   <option value="<?php echo $city->id_kota;?>" <?php echo $selected;?> ><?php echo $city->nama_kota;?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
           <!-- /.card-body -->

           <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->


      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
</div>
</section>