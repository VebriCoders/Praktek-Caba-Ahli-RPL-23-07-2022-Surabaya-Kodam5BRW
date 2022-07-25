    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="<?php echo base_url('home') ?>" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="<?php echo base_url('assets/img/') ?>logo-tni-ad.png" width="80" height="104">
                    <h1 style="margin-left: 10px">TNI-AD</h1>
                </a>
            </header>

            <?= $this->session->flashdata('notifikasi'); ?>

            <div class="bg-light p-5 rounded">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Di Buka, Pendaftaran Anggota TNI - AD!</h1>
                    <p class="col-md-8 fs-4">Daftarkan diri anda sekarang juga.</p>
                    <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
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