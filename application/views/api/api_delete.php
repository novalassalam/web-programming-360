<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">API DELETE </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo base_url('Tes/curl_delete'); ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Kota</label>
                                <input type="text" class="form-control" name="idnya" required>
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