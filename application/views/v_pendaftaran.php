<main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="<?php echo base_url('pendaftaran') ?>" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="<?php echo base_url('assets/img/') ?>logo-tni-ad.png" width="40" height="52">
                <h1 style="margin-left: 10px">Formulir Pendaftaran</h1>
            </a>
        </header>

        <?= $this->session->flashdata('notifikasi'); ?>

        <div class="bg-light p-5 rounded">
            <div class="container-fluid py-5" style="margin-bottom: 80px">
                <h1 class="display-8 fw-bold text-center" style="margin-bottom: 30px">Data Calon Prajurit TNI-AD</h1>

                <?php echo form_open_multipart('pendaftaran/simpan'); ?>

                <div class="form-group mb-3 row">
                    <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone" required>
                        <p style="color: red">Masukkan nomor yang belum/tidak pernah terdaftar!</p>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Peserta" required>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">Pria</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="2" required>
                            <label class="form-check-label" for="inlineRadio2">Wanita</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap..." id="floatingTextarea2" style="height: 100px" required></textarea>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select-lg mb-3" name="agama" required>
                            <option value="">--- Pilih Agama ---</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="KATOLIK">KATOLIK</option>
                            <option value="HINDU">HINDU</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="KHONGHUCU">KHONGHUCU</option>
                        </select>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>

                <?php echo form_close(); ?>
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