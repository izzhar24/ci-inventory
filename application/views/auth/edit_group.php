<div class="card">
      <div class="card-body">

            <h1><?php echo lang('edit_group_heading'); ?></h1>
            <p><?php echo lang('edit_group_subheading'); ?></p>

            <div id="infoMessage"><?php echo $message; ?></div>

            <?php echo form_open(current_url()); ?>

            <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Group Name</label>
                  <div class="col-sm-6">
                        <?php echo form_input($group_name); ?>
                  </div>
            </div>
            <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Group Description</label>
                  <div class="col-sm-6">
                        <?php echo form_input($group_description); ?>
                  </div>
            </div>

            <div class="form-group row">
                  <div class="col-sm-6 offset-sm-2">
                        <?php echo form_submit('submit', lang('edit_group_submit_btn'), "class='btn btn-primary'"); ?>
                        <a href="<?= base_url() ?>users" class="btn btn-danger">Cancel</a>
                  </div>
            </div>
            <?php echo form_close(); ?>
      </div>
</div>