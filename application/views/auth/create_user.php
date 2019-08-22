<div class="card">
      <div class="card-body">
            <h1><?php echo lang('create_user_heading'); ?></h1>
            <p><?php echo lang('create_user_subheading'); ?></p>
            <hr />

            <div id="infoMessage"><?php echo $message; ?></div>

            <?php echo form_open("auth/create_user"); ?>

            <p>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-6">
                              <?php echo form_input($first_name); ?>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-6">
                              <?php echo form_input($last_name); ?>
                        </div>
                  </div>
                  <?php
                  if ($identity_column !== 'email') {
                        echo '<p>';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p>';
                  }
                  ?>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                              <?php echo form_input($email); ?>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-6">
                              <?php echo form_input($phone); ?>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-4">
                              <?php echo form_input($password); ?>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Password Confirm</label>
                        <div class="col-sm-4">
                              <?php echo form_input($password_confirm); ?>
                        </div>
                  </div>

                  <div class="form-group row">
                        <div class="col-sm-6 offset-sm-2">
                              <?php echo form_submit('submit', lang('create_user_submit_btn'), "class='btn btn-primary'"); ?>
                              <a href="<?= base_url() ?>users" class="btn btn-danger">Cancel</a>
                        </div>
                  </div>

                  <?php echo form_close(); ?>
      </div>
</div>