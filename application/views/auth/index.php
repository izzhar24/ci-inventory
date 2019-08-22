<div class="card">
	<div class="card-header">
		<div class="card-title">
			<h3><?php echo lang('index_heading'); ?></h3>
		</div>
	</div>
	<div class="card-body">
		<div id="infoMessage"><?php echo $message; ?></div>
		<table cellpadding=0 cellspacing=10 class="table table-bordered table-condensed">
			<tr>
				<th><?php echo lang('index_fname_th'); ?></th>
				<th><?php echo lang('index_lname_th'); ?></th>
				<th><?php echo lang('index_email_th'); ?></th>
				<th>Phone</th>
				<th><?php echo lang('index_groups_th'); ?></th>
				<th><?php echo lang('index_status_th'); ?></th>
				<th><?php echo lang('index_action_th'); ?></th>
			</tr>
			<?php foreach ($users as $user) : ?>
			<tr>
				<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($user->phone, ENT_QUOTES, 'UTF-8'); ?></td>
				<td>
					<?php foreach ($user->groups as $group) : ?>
					<?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
					<?php endforeach ?>
				</td>
				<td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
				<td>
					<a class="btn btn-sm btn-square btn-warning" href="<?= base_url() . 'auth/edit_user/' . $user->id ?>" title="Edit"><span class="fa fa-edit"></span></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<div class="card-footer">
		<?php echo anchor('auth/create_user', lang('index_create_user_link')) ?> | <?php echo anchor('auth/create_group', lang('index_create_group_link')) ?>
	</div>
</div>