<? foreach($comments as $comment): ?>
		<div class="comment">
			<p><?=$comment['Comment']['body'];?></p>
			<div class='userntime'><p><i>-<?=$comment['User']['username']." _".$comment['Comment']['created']."</i>";?></p></div>
		</div>
<? endforeach; ?>