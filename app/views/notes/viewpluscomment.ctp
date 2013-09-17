
<?php
	//echo $javascript->link('prototype');
	//echo $javascript->link('scriptaculous');
	echo $javascript->link('jquery-1.3.1.min');
	echo $javascript->link('linonico');
?>
<script type="text/javascript">SyntaxHighlighter.all();</script>
<div id="notes">
	<h1><?php echo $note['Note']['title']; ?></h1>
	<ul>
		<li><p><?php echo $note['Note']['description']; ?></p></li>
	</ul>
	<div id="notebodydiv">
		<p class='notebody'>
			<?php echo $note['Note']['body']; ?>
		</p>
	</div>
	<div id="addedcommentsdiv">
		<? foreach($comments as $comment): ?>
			<div class="comment">
				<p><?=$comment['Comment']['body'];?></p>
				<div class='userntime'><p><i>-<?=$comment['User']['username']." _".$comment['Comment']['created']."</i>";?></p></div>
			</div>
		<? endforeach; ?>
	</div>
			
	<p id='toggleAddComment'><a class="showhide" href="#dummy">Add Comment</a></p>
	<div id="addcommentdiv">
		<cake:nocache>
		<?php if ($session->check('Auth.User.username')) : ?>
				<?// Using jquery ajax. ?>
				Hi <? echo $session->read('Auth.User.username'); ?>, please enter your comment below and click on "Add Comment".
				<?=$form->create('Comment');?>
				<?=$form->input('Comment.body');?>
				<?=$form->input('Comment.note_id', array('type'=>'hidden','value'=>$note['Note']['id']));?>
				<?=$form->input('Comment.user_id', array('type'=>'hidden','value'=>0));?>
				<?="<input id='jqAddComment' type='button' value='Add Comment'>"?>
				<?=$form->end();?>
		<?php else: ?>
				Sorry you must log in first to be able to add a comment. <?php echo $html->link('Click here', array('controller' => 'users', 'action' => $strLogInOut)); ?> to log in.
		<?php endif; ?>
		</cake:nocache>
<? /*	// Using prototype ajax.
		<?=$ajax->form($params = array('type' => 'post',
					       'options' => array(
								  'update' => 'addedcommentsdiv',
								  'url' => array('controller' => 'comments','action' => 'add')
								  )
					      ));?>
		<?=$form->input('Comment.body');?>
		<?=$form->input('Comment.note_id', array('type'=>'hidden','value'=>$note['Note']['id']));?>
		<?=$form->input('Comment.user_id', array('type'=>'hidden','value'=>0));?>
		<?=$form->end('Add Comment');?>
*/ ?>
	</div>
	<div class="actions">
		<ul>
			<?php /* <li><?php echo $html->link(__('Edit Note', true), array('action'=>'edit', $note['Note']['id'])); ?> </li> */ ?>
			<?php /* <li><?php echo $html->link(__('Delete Note', true), array('action'=>'delete', $note['Note']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $note['Note']['id'])); ?> </li> */ ?>
			<?php /* <li><?php echo $html->link(__('New Note', true), array('action'=>'add')); ?> </li> */ ?>
			<li>|</li>
			<li><?php echo $html->link(__('Back to notes list', true), array('action'=>'index')); ?> </li>
			<li>|</li>
			<?php /* <li><?php echo $ajax->link('Add Comment', '/comments/add',array('update'=>'addedcommentsdiv')); ?></li> */ ?>
			<?php /* <li><?php echo $html->link(__('Add Comment', true), array('controller'=>'comments', 'action'=>'add')); ?> </li> */ ?>
			<?php /* <li><?php echo $html->link(__('Add Comment', true), '/comments/action'); ?> </li> */ ?>
		</ul>
	</div>
</div>
