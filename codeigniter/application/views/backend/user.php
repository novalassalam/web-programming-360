<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
             <?php echo $this->session->flashdata('notif'); ?>
            <h3 class="card-title">Data User</h3>
            <br>
            <a class="btn btn-success btn-sm" href="<?php echo base_url('Welcome/aksi/add');?>">  <i class="fa fa-eye"></i> Tambah
                </a>
          </div>
         
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Kota</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($isi as $data) { ?>
                  <tr>
                    <td><?php echo $data->nama_user;?></td>
                    <td><?php echo $data->email_user;?></td>
                    <td><?php echo $data->nama_kota;?></td>
                    <td> <a class="btn  btn-primary btn-sm" href="<?php echo base_url('Welcome/aksi/edit?id=').$data->id_user;?>">
                  <i class="fa fa-edit"></i> Edit
                </a>  &nbsp; <a class="btn  btn-warning btn-sm" href="<?php echo base_url('Welcome/aksi/view?id=').$data->id_user;?>"> 
                  <i class="fa fa-eye"></i> Lihat
                </a>  &nbsp;
                <a class="btn btn-danger btn-sm" href="<?php echo base_url('Welcome/aksi/delete?id=').$data->id_user;?>" onclick="return confirm('Are you sure you want to delete ?')">
                  <i class="fa fa-trash "></i> Delete
                </a> 
              </td>
                  </tr>
                <?php  } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kota</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
