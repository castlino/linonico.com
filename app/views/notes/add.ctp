<?php
	//echo $javascript->link('linonico');
?>

<div class="notes form">
<?php echo $form->create('Note',array('name'=>'AddNoteForm','id'=>'AddNoteForm','type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Add Note');?></legend>
	<?php
		echo $form->input('user_id', array('default' => $session->read('Auth.User.id'), 'disabled'=>'true' ));
		echo $form->input('topic_id');
		echo $form->input('title');
		echo $form->input('description');
		echo $form->input('descriptions',array('type'=>'hidden'));
		echo $form->input('resource_path');
		echo "<div id='NoteBodyDiv'>";
			echo $form->input('body', array('value'=>'Write your notes here....', 'rows'=>'5'));
		echo "</div>";
		//echo "<div id='ImgFileDiv'>";
		echo $form->input('upload_img', array('label'=>'Upload Image file ','type'=>'file'));
		echo $form->button('Upload File', array('onClick'=>'UpdateNoteBody(); return false;'));
		//echo $form->button('Upload File', array('onClick'=>'$(\'#NoteBodyDiv\').html(\'<p>Body</p><div id="waitDiv"></div>\');
		//					$(\'#AddNoteForm\').ajaxSubmit({target: \'#NoteBodyDiv\',
		//									   url: \''.$html->url('/notes/uploadImage').'\',
		//								       success: function(){} }); return false;'));
		//echo "</div>";
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>

<?php /*?>
<div class="Image Upload form">
	<fieldset>
 		<legend><?php __('Upload Image');?></legend>
<?php echo $form->create('ImgUpload',array('enctype'=>'multipart/form-data'));?>
<?php echo $form->input('ImpUpload.Image Upload', array('between'=>'<br />','type'=>'file'));?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<?php */?>

<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Notes', true), array('action'=>'index'));?></li>
	</ul>
</div>
