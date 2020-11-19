<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo $this->session->flashdata('notif'); ?>
                        <h3 class="card-title">Data Karyawan</h3>
                        <br>
                        <a class="btn btn-success btn-sm" href="<?php echo base_url('karyawan/aksi/tambah'); ?>"> <i class="fa fa-eye"></i> Tambah
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama karyawan</th>
                                    <th>Jabatan</th>
                                    <th>Date Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($this->uri->segment(1) == 'karyawan') {
                                    $no = 1;
                                    foreach ($isi as $data) {

                                ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data->name_karyawan; ?></td>
                                            <td><?php echo $data->nama; ?></td>
                                            <td><?php echo $data->date_created; ?></td>
                                            <td> <a class="btn  btn-primary btn-sm" href="<?php echo base_url('karyawan/aksi/edit?id=') . $data->id_karyawan; ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a> &nbsp; <a class="btn  btn-warning btn-sm" href="<?php echo base_url('karyawan/aksi/view?id=') . $data->id_karyawan; ?>">
                                                    <i class="fa fa-eye"></i> Lihat
                                                </a> &nbsp;
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url('karyawan/aksi/delete?id=') . $data->id_karyawan; ?>" onclick="return confirm('Are you sure you want to delete ?')">
                                                    <i class="fa fa-trash "></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Date Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                <?php } else { ?>
                    <br>
                    <h3>from crul api</h3>
                    <?php
                                    foreach ($crul as $data) {
                    ?>
                        <tr>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->email; ?></td>
                            <td><?php echo $data->kota; ?></td>
                            <td> <a class="btn  btn-primary btn-sm" href="<?php echo base_url('Welcome/aksi/edit?id=') . $data->id; ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a> &nbsp; <a class="btn  btn-warning btn-sm" href="<?php echo base_url('Welcome/aksi/view?id=') . $data->id; ?>">
                                    <i class="fa fa-eye"></i> Lihat
                                </a> &nbsp;
                                <a class="btn btn-danger btn-sm" href="<?php echo base_url('Welcome/aksi/delete?id=') . $data->id; ?>" onclick="return confirm('Are you sure you want to delete ?')">
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
            <?php } ?>
            <!-- /.card-body -->
            </div>
        </div>
    </div>
    </div>
</section>