<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="formid" method="post" action="<?php echo base_url('jquery/tambah'); ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nama user" id="nama" name="nama">
                            </div>

                            <div class="form-group">
                                <label>Kota</label>
                                <select class="form-control" name="kota" id="kota">
                                    <option>-pilih kota-</option>

                                    <?php

                                    foreach ($kota as $city) {
                                        $selected = ($city->id_kota == $id_kota) ? 'selected' : '';
                                    ?>

                                        <option value="<?php echo $city->id_kota; ?>"><?php echo $city->nama_kota; ?></option>
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


<!-- Page specific script -->
<script>
    $().ready(function() {
        $("#formid").validate({
            rules: {

                nama: {
                    required: true,
                    minlength: 5
                },

                kota: {
                    required: true,
                    number: true
                },

                email: {
                    required: true,
                    email: true
                }

            },
            // messages: {

            //     password: {
            //         required: "Please provide a password",
            //         minlength: "Your password must be at least 5 characters long"
            //     },

            //     email: "Please enter a valid email address",

            // }
        });
    });
</script>