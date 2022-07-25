<main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="<?php echo base_url('data_peserta') ?>" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="<?php echo base_url('assets/img/') ?>logo-tni-ad.png" width="40" height="52">
                <h1 style="margin-left: 10px">Data Peserta</h1>
            </a>
        </header>

        <?= $this->session->flashdata('notifikasi'); ?>

        <div class="bg-light p-5 rounded">
            <div class="container-fluid py-5" style="margin-bottom: 80px">
                <h1 class="display-8 fw-bold text-center" style="margin-bottom: 30px">Data Peserta Calon Prajurit TNI-AD</h1>

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Handphone</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Di Daftarkan</th>

                            <?php if ($this->session->userdata('is_login') == 1) { ?>
                                <th>Action</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($tampilData->result() as $data) { ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data->no_hp ?></td>
                                <td><?php echo $data->nama ?></td>
                                <td>
                                    <?php if ($data->jenis_kelamin == 1) {
                                        echo "Pria";
                                    } else {
                                        echo "Wanita";
                                    }  ?>
                                </td>
                                <td><?php echo $data->alamat ?></td>
                                <td><?php echo $data->agama ?></td>
                                <td><?php echo $data->created_on ?></td>

                                <?php if ($this->session->userdata('is_login') == 1) { ?>
                                    <td style="width: 250px">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit-id-<?php echo $data->id ?>">
                                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                                </button>
                                            </div>
                                            <div class="btn-group me-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus-id-<?php echo $data->id ?>">
                                                    <i class="fa-solid fa-trash-can"></i> Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>

            </div>
        </div>

        <footer class="pt-3 mt-4 text-muted border-top">
            Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>

            <?php if ($this->session->userdata('is_login') == 1) { ?>
                <p>Login Sebagai : <?php echo $this->session->userdata('nama_admin') ?> (<?php echo $this->session->userdata('email_username') ?>)</p>
            <?php } ?>
        </footer>
    </div>
</main>


<?php if ($this->session->userdata('is_login') == 1) { ?>
    <?php foreach ($tampilData->result() as $data) { ?>

        <!-- Modal Edit-->
        <?php echo form_open_multipart('data_peserta/edit'); ?>
        <div class="modal fade" id="modalEdit-id-<?php echo $data->id ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Edit Data (<?php echo $data->nama ?>) </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" name="query_id" value="<?php echo $data->id ?>">

                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" name="no_hp" value="<?php echo $data->no_hp ?>" class="form-control" placeholder="Masukkan Nomor Handphone" required>
                                <p style="color: red">Masukkan nomor yang belum/tidak pernah terdaftar!</p>
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" value="<?php echo $data->nama ?>" class="form-control" placeholder="Masukkan Nama Peserta" required>
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <?php if ($data->jenis_kelamin == 1) { ?>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="1" checked required>
                                        <label class="form-check-label" for="inlineRadio1">Pria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="2" required>
                                        <label class="form-check-label" for="inlineRadio2">Wanita</label>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="1" required>
                                        <label class="form-check-label" for="inlineRadio1">Pria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="2" checked required>
                                        <label class="form-check-label" for="inlineRadio2">Wanita</label>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap..." id="floatingTextarea2" style="height: 100px" required><?php echo $data->alamat ?></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-lg mb-3" name="agama" required>

                                    <?php if ($data->agama == 'ISLAM') { ?>
                                        <option value="">--- Pilih Agama ---</option>
                                        <option value="ISLAM" selected>ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    <?php } elseif ($data->agama == 'KRISTEN') { ?>
                                        <option value="">--- Pilih Agama ---</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN" selected>KRISTEN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    <?php } elseif ($data->agama == 'KATOLIK') { ?>
                                        <option value="">--- Pilih Agama ---</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="KATOLIK" selected>KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    <?php } elseif ($data->agama == 'HINDU') { ?>
                                        <option value="">--- Pilih Agama ---</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU" selected>HINDU</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    <?php } elseif ($data->agama == 'BUDHA') { ?>
                                        <option value="">--- Pilih Agama ---</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDHA" selected>BUDHA</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    <?php } elseif ($data->agama == 'KHONGHUCU') { ?>
                                        <option value="">--- Pilih Agama ---</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="KHONGHUCU" selected>KHONGHUCU</option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Batal</button>
                        <button id="submit" type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>

        <!-- Modal Hapus-->
        <?php echo form_open_multipart('data_peserta/hapus'); ?>
        <div class="modal fade" id="modalHapus-id-<?php echo $data->id ?>" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHapusLabel">Hapus Data (<?php echo $data->nama ?>) </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="query_id" value="<?php echo $data->id ?>">
                        Apakah anda yakin menghapus data peserta atas nama <b><?php echo $data->nama ?></b> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Batal</button>
                        <button id="submit" type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>

    <?php } ?>
<?php } ?>