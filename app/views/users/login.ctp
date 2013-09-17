<?php
	echo $javascript->link('jquery-1.3.1.min');
	echo $javascript->link('linonico');
?>

<h2>Login</h2>
<?php
echo $form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));
echo $form->input('User.username');
echo $form->input('User.password');
//echo $form->button('Sign up', array('onclick'=>'location.href="/users/index"', 'style'=>'width:100px;'));
//echo $html->link('show index', '/users/index', array('type'=>'button'));
echo $form->end('Login', array('style'=>'align:left;'));

?>
<p class='comment'>Don't have a user account yet? SIGN UP!!! It's free and quick...</p>
<a id='toggleSignUp' class="showhide" href="#dummy"><h5>Sign Up here...</h5></a>

<div id="signupdiv">
<h2>Sign Up</h2>
	<?php
		echo $form->create('User', array('url' => array('controller' => 'users', 'action' =>'signup')));
		//echo $form->input('group_id', array('type'=>'hidden', 'value'=>'4'));		//users 
		echo $form->input('group_id', array('type'=>'hidden', 'value'=>'6'));		//viewers  (Don't allow new users to add notes just yet, make them viewers instead for the time being... I'll finalize some features first.)
		echo $form->input('User.username');
		echo $form->input('User.password');
		echo $form->input('UsersInfo.email');
		echo $form->input('UsersInfo.firstname');
		echo $form->input('UsersInfo.lastname');
		echo $form->end('Sign Up', array('style'=>'align:left;'));
	?>
</div>

<br>
