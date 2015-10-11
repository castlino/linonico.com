<?php
	//echo $javascript->link('prototype');
	//echo $javascript->link('scriptaculous');
	echo $javascript->link('jquery-1.3.1.min');
	echo $javascript->link('linonico');
?>
<?php
	$data = array(
	    "id" => 24,
	    "username" => "felinocastro",
	    "email" => "castlino@gmail.com",
	    "avatar" => "",
	    "url" => ""
	);
	$message = base64_encode(json_encode($data));
	$timestamp = time();
	$hmac = hash_hmac('sha1', $message." ".$timestamp, "iTgCarTNC8rO0H4zXDeDGHbCPT72MuxtZ48Cgaoo6TCeq8Id50yyto1ICGNfoBpH");

?>
<?php /*
    <script type="text/javascript">
	var disqus_config = function () {
	    // The generated payload which authenticates users with Disqus
	    //this.page.remote_auth_s3 = '<message> <hmac> <timestamp>';
	    this.page.remote_auth_s3 = '<?php echo $message." ".$hmac." ".$timestamp; ?>';
	    this.page.api_key = 'ks0XNBGTcuhhmC71uvupBIeQwmLYO3pJCqdJxDuj8oeH32ycvwRHCKRFDSC3sHWZ';
	
		// This adds the custom login/logout functionality
    this.sso = {
          name:   "linonico",
          button:  "http://example.com/images/samplenews.gif",
          icon:     "http://example.com/favicon.png",
          url:        "http://notes.linonico.com/users/login",
          logout:  "http://example.com/logout/",
          width:   "800",
          height:  "400"
    };
	}
    </script>
*/ ?>
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

<div id="disqus_thread"></div>

<script type="text/javascript">SyntaxHighlighter.all();</script>
<?php /*
    <script type="text/javascript">
        var disqus_shortname = 'noteslinonico'; // required: replace example with your forum shortname
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
*/ ?>
