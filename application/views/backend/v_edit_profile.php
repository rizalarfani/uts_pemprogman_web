<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php echo form_open_multipart('profile/edit_post?id_user=' . $isi->id_user . '') ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?php echo $isi->email_user ?>">
                            <span class="text-danger"><?php echo form_error('email') ?></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nama user" name="nama" value="<?php echo $isi->nama_user; ?>">
                            <span class="text-danger"><?php echo form_error('nama') ?></span>
                        </div>

                        <div class="form-group">
                            <label>Kota</label>
                            <select class="form-control" name="kota">
                                <option>-pilih kota-</option>
                                <?php

                                foreach ($kota as $city) {
                                    $selected = ($city->id_kota == $isi->id_kota) ? 'selected' : '';
                                ?>
                                    <option value="<?php echo $city->id_kota; ?>" <?php echo $selected; ?>><?php echo $city->nama_kota; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Upload Foto</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="nama user" name="upload_foto">
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