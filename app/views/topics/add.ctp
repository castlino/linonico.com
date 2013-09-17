<div class="topics form">
<?php echo $form->create('Topic');?>
	<fieldset>
 		<legend><?php __('Add Topic');?></legend>
	<?php
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Topics', true), array('action'=>'index'));?></li>
	</ul>
</div>
