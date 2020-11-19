<?php
if ($this->uri->segment(3) == 'tambah') {
    $nama_karyawan = '';
    // $id_karyawan = '';
    $aksi = base_url('karyawan/aksi/tambah/proses');
} else {
    $nama_karyawan = ($isi) ? $isi->name_karyawan : "";
    $id_jabatan = ($isi) ? $isi->id_jabatan : "";
    $aksi = base_url('karyawan/aksi/edit/proses?id=') . $id_jabatan;
}
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah/edit Karyawan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo $aksi; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Karyawan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name_karyawan" placeholder="Enter nama karyawan" value="<?php echo $nama_karyawan; ?>">
                                <span class="text-danger"><?php echo form_error('name_karyawan') ?></span>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <option>-pilih Jabatan-</option>
                                    <?php

                                    foreach ($jabatan as $data) {
                                        $selected = ($data->id_jabatan == $id_jabatan) ? 'selected' : '';
                                    ?>

                                        <option value="<?php echo $data->id_jabatan; ?>" <?php echo $selected; ?>><?php echo $data->nama; ?></option>
                                    <?php } ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('jabatan') ?></span>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
</section>