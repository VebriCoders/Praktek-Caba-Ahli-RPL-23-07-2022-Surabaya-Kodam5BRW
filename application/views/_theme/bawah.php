 <!-- JS -->
 <script src="<?php echo base_url('assets/js/') ?>jquery-3.6.0.min.js"></script>
 <script src="<?php echo base_url('assets/js/') ?>bootstrap.bundle.min.js"></script>
 <script src="<?php echo base_url('assets/plugin/datatables/') ?>jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url('assets/plugin/fontawesome/') ?>all.js"></script>

 <script>
     $(document).ready(function() {
         $('#table_id').DataTable();
     });
 </script>

 <script>
     $(document).ready(function() {
         window.setTimeout(function() {
             $(".alert").fadeTo(500, 0).slideUp(500, function() {
                 $(this).remove();
             });
         }, 4000);
     });
 </script>

 <!-- Modal Login -->
 <?php echo form_open_multipart('login/proses'); ?>
 <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modalLoginLabel">Login Apps</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="mb-3 row">
                     <label class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                         <input id="email" type="email" name="email_username" class="form-control" placeholder="Email" tabindex="1" required autofocus oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                     </div>
                 </div>
                 <div class="mb-3 row">
                     <label class="col-sm-2 col-form-label">Password</label>
                     <div class="col-sm-10">
                         <input id="password" type="password" class="form-control" name="password" placeholder="Password" tabindex="2" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                     </div>
                 </div>

                 <input type="hidden" name="link_back" value="<?php echo $this->uri->segment(1) ?>">
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Batal</button>
                 <button id="submit" type="submit" class="btn btn-success"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
             </div>
         </div>
     </div>
 </div>
 <?php echo form_close(); ?>

 <!-- Modal Logout-->
 <?php echo form_open_multipart('login/logout'); ?>
 <div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modalLogoutLabel">Logout Apps</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 Anda yakin akan keluar dari menu admin?
                 <input type="hidden" name="link_back" value="<?php echo $this->uri->segment(1) ?>">
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Batal</button>
                 <button id="submit" type="submit" class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
             </div>
         </div>
     </div>
 </div>
 <?php echo form_close(); ?>
 </body>

 </html>