<?php
if ($this->uri->segment(3) == 'tambah') {
    $nama_jabatan = '';
    // $id_karyawan = '';
    $aksi = base_url('jabatan/aksi/tambah/proses');
} else {
    $nama_jabatan = $isi->nama;
    $id_jabatan = $isi->id_jabatan;
    $aksi = base_url('jabatan/aksi/edit/proses?id=') . $isi->id_jabatan;
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
                        <h3 class="card-title">Tambah Jabatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo $aksi; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jabatan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jabatan" placeholder="Nama Jabatan" value="<?php echo $nama_jabatan; ?>">
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