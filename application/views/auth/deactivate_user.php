<div class="card">
  <div class="card-body">

    <h1><?php echo lang('deactivate_heading'); ?></h1>
    <p><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>

    <?php echo form_open("auth/deactivate/" . $user->id); ?>

    <p>
      <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
      <input type="radio" name="confirm" value="yes" checked="checked" />
      <?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
      <input type="radio" name="confirm" value="no" />
    </p>

    <?php echo form_hidden($csrf); ?>
    <?php echo form_hidden(['id' => $user->id]); ?>

    <div class="row">
      <div class="col-sm-6">
        <?php echo form_submit('submit', lang('deactivate_submit_btn'), "class='btn btn-primary'"); ?>
        <a href="<?= base_url() ?>users" class="btn btn-danger">Cancel</a>
      </div>
    </div>

    <?php echo form_close(); ?>
  </div>
</div>