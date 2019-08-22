<div class="card">
      <div class="card-body">
            <h1><?php echo lang('edit_user_heading'); ?></h1>
            <p><?php echo lang('edit_user_subheading'); ?></p>
            <hr />

            <div id="infoMessage"><?php echo $message; ?></div>

            <?php echo form_open(uri_string()); ?>

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
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-6">
                              <?php echo form_input($phone); ?>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                              <?php echo form_input($password); ?>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Password Confirm</label>
                        <div class="col-sm-6">
                              <?php echo form_input($password_confirm); ?>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"><?php echo lang('edit_user_groups_heading'); ?></label>
                        <div class="col-sm-6">
                              <?php if ($this->ion_auth->is_admin()) : ?>

                              <?php foreach ($groups as $group) : ?>
                              <label class="checkbox">
                                    <?php
                                                $gID = $group['id'];
                                                $checked = null;
                                                $item = null;
                                                foreach ($currentGroups as $grp) {
                                                      if ($gID == $grp->id) {
                                                            $checked = ' checked="checked"';
                                                            break;
                                                      }
                                                }
                                                ?>
                                    <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                                    <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                              </label>
                              <?php endforeach ?>

                              <?php endif ?>
                        </div>
                  </div>


                  <div class="form-group row">
                        <div class="col-sm-6 offset-sm-2">
                              <?php echo form_submit('submit', lang('edit_user_submit_btn'), "class='btn btn-primary'"); ?>
                              <a href="<?= base_url() ?>users" class="btn btn-danger">Cancel</a>
                        </div>
                  </div>

                  <?php echo form_hidden('id', $user->id); ?>
                  <?php echo form_hidden($csrf); ?>
                  <?php echo form_close(); ?>
      </div>
</div>