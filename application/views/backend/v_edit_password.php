<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Password</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php echo form_open_multipart('profile/edit_password/edit_password_post') ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password Baru</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Enter password">
                            <span class="text-danger"><?php echo form_error('password') ?></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password" name="konfirmasi_password">
                            <span class="text-danger"><?php echo form_error('konfirmasi_password') ?></span>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
                <!-- /.card -->
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
</section>