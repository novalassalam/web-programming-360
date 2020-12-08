<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/Template/admin//dist/img/user4-128x128.jpg');?>" alt="User profile picture">
            </div>

            <h3 class="profile-username text-center"><?php echo $isi->nama_user;?></h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Email</b> <a class="float-right"><?php echo $isi->email_user;?></a>
              </li>
              <li class="list-group-item">
                <b>Kota</b> <a class="float-right"><?php echo $isi->nama_kota;?></a>
              </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>