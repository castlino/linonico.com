<div class="usersInfos index">
<h2><?php __('UsersInfos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('firstname');?></th>
	<th><?php echo $paginator->sort('lastname');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($usersInfos as $usersInfo):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $usersInfo['UsersInfo']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($usersInfo['User']['id'], array('controller'=> 'users', 'action'=>'view', $usersInfo['User']['id'])); ?>
		</td>
		<td>
			<?php echo $usersInfo['UsersInfo']['email']; ?>
		</td>
		<td>
			<?php echo $usersInfo['UsersInfo']['firstname']; ?>
		</td>
		<td>
			<?php echo $usersInfo['UsersInfo']['lastname']; ?>
		</td>
		<td>
			<?php echo $usersInfo['UsersInfo']['created']; ?>
		</td>
		<td>
			<?php echo $usersInfo['UsersInfo']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $usersInfo['UsersInfo']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $usersInfo['UsersInfo']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $usersInfo['UsersInfo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersInfo['UsersInfo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New UsersInfo', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
