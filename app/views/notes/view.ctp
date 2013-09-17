
<?php /*
	echo $javascript->link('jquery-1.3.1.min', false);
	echo $javascript->link('linonico', false);
     */	?>
<div id="notes">
	<h1><?php echo $note['Note']['title']; ?></h1>
	<ul>
		<li><p><?php echo $note['Note']['description']; ?></p></li>
	</ul>
	<p>
		<?php echo $note['Note']['body']; ?>
	</p>
<?php /* echo $html->link('add beer', '#', array('onclick'=>'return false;', 'id'=>'some-beer-name', 'class'=>'add-beer-link')); */ ?>
<?php /*
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['topic_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Resource Path'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['resource_path']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Body'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['body']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
*/?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('Edit Note', true), array('action'=>'edit', $note['Note']['id'])); ?> </li>
			<li><?php echo $html->link(__('Delete Note', true), array('action'=>'delete', $note['Note']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $note['Note']['id'])); ?> </li>
			<li><?php echo $html->link(__('List Notes', true), array('action'=>'index')); ?> </li>
			<li><?php echo $html->link(__('New Note', true), array('action'=>'add')); ?> </li>
			<li><?php echo $html->link(__('Add Comment', true), array('controller'=>'comments', 'action'=>'add')); ?> </li>
			<?php /* <li><?php echo $html->link(__('Add Comment', true), '/comments/action'); ?> </li> */ ?>
		</ul>
	</div>
</div>