<div class="usersInfos form">
<?php echo $form->create('UsersInfo');?>
	<fieldset>
 		<legend><?php __('Edit UsersInfo');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id');
		echo $form->input('email');
		echo $form->input('firstname');
		echo $form->input('lastname');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('UsersInfo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('UsersInfo.id'))); ?></li>
		<li><?php echo $html->link(__('List UsersInfos', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
