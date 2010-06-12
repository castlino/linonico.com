
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('LiNoniCo'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('cake.generic');
		echo $html->css('linonico');
		echo $scripts_for_layout;
		
		// Can't assign true to parameter 2, for some reason, maybe its because we are in the default.ctp, it works in views(add.ctp, view.ctp, etc.).
		echo $javascript->link('jquery-1.3.1.min');
		echo $javascript->link('jquery.form.js');
		echo $javascript->link('linonico');
	?>

</head>
<body>
	<div id="container">
		<div id="header">
			<h1><i><?php echo $html->link(__('LiNoniCo: mY notES arE yoUr nOtEs...', true), 'http://linonico.com'); ?></i></h1>

			<div id="logostrip"><div id="logolabel"></div></div>
			<div id="menubg">
			    <div id="menustrip">
				<ul>
				<li class='rightfl'><?php echo $html->link($strLogInOut, array('controller' => 'users', 'action' => $strLogInOut)); ?></li>
				</ul>
				<ul>
				<li><?php echo $html->link('home', array('controller' => 'notes', 'action' => 'viewpluscomment', 21)); ?></li>
				<li><?php echo $html->link('about', array('controller' => 'users', 'action' => 'about')); ?></li>
				<li><?php echo $html->link('contact', array('controller' => 'users', 'action' => 'contact')); ?></li>
				</ul>
			    </div>
			</div>
		</div>
		<?php /* <div id="content"> */ ?>
		<div id="bodybg">
		   <div id="mainmessage">
			<?php $session->flash(); ?>
			<?php $session->flash('auth'); ?>
			<?php echo $content_for_layout; ?>
		   </div> 
		</div>
		<?php /* </div> */ ?>
<?php /*		
		<div id="footer">
			<?php echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
			?>
		</div>
*/ ?>
		<div id="footerbg"> 
		        <div style="width: 800px; padding-top:100px;" id="opticEmp"><a href="http://www.opticempire.com.au/oesys/aff.php?aff=010" style="float: right;"><img src="http://www.opticempire.com.au/images/oeLOGO.jpg" /></a>         </div>
		        <div id="footercap">        </div>
		        <p class="footer"><i>LiNoniCo 2009</i></p>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>
