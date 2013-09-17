
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="google-site-verification" content="hMR72zudPsmI73pXmh4bE6PeC7FGhZ67b0hUzUvOqYA" />
	<?php echo $html->charset(); ?>
	<title>
		<?php __('LiNoniCo'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('cake.generic');
		echo $html->css('linonico');
		echo $html->css('syntaxhighlighter_css/shCoreDefault');
		echo $scripts_for_layout;
		
		// Can't assign true to parameter 2, for some reason, maybe its because we are in the default.ctp, it works in views(add.ctp, view.ctp, etc.).
		echo $javascript->link('jquery-1.3.1.min');
		echo $javascript->link('jquery.form');
		echo $javascript->link('linonico');

		echo $javascript->link('syntaxhighlighter_js/shCore');
		echo $javascript->link('syntaxhighlighter_js/shBrushJScript');

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
				<!-- <li><?php echo $html->link('home', array('controller' => 'notes', 'action' => 'viewpluscomment', 21)); ?></li> -->
				<li><?php echo $html->link('home', 'http://linonico.com'); ?></li>
				<li><?php echo $html->link('about', array('controller' => 'users', 'action' => 'about')); ?></li>
				<li><?php echo $html->link('contact', array('controller' => 'users', 'action' => 'contact')); ?></li>
				<li><?php echo $html->link('links', array('controller' => 'infos', 'action' => 'showLinks')); ?></li>
				<li><div id="searchbox">
<!-- 
					<form name="Notes" id="Notes" method="post" action="/notes/index">
						<input type="text" name="searchString" value="" />
						<a href="#" onClick="Notes.submit();">Search</a>
					</form>
-->
					<?php echo $form->create('NoteSearch', array('url' => '/notes/')); ?>
					<?php echo $form->input('searchString', array('label' => false, 'div' => array('style' => 'display: inline'))); ?>
					<?php echo $form->button('Search', array('class' => 'searchButton', 'onClick' => 'submit();')); ?>
					<?php echo $form->end(); ?>
				</div></li>
				</ul>
			    </div>
			</div>
		</div>
		<?php /* <div id="content"> */ ?>
		<div id="bodybg">
			<div id="expTweeter">
				<div id="expTweeterDiv">
					<div id="expTweeterButton"></div> 
					<div id="expTweeterRightSkirt"></div> 
					<div id="expTweeterContent">
						<script src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
							new TWTR.Widget({
							  version: 2,
							  type: 'profile',
							  rpp: 3,
							  interval: 4000,
							  width: 'auto',
							  height: 295,
							  theme: {
							    shell: {
							      background: '#684211',
							      color: '#999933'
							    },
							    tweets: {
							      background: '#dbc598',
							      color: '#6a3a29',
							      links: '#ee3322'
							    }
							  },
							  features: {
							    scrollbar: false,
							    loop: true,
							    live: true,
							    hashtags: true,
							    timestamp: true,
							    avatars: true,
							    behavior: 'default'
							  }
							}).render().setUser('castlino').start();
						</script>
					</div>
				</div>
		   	</div>
		   <div id="mainmessage">
			<?php $session->flash(); ?>
			<?php $session->flash('auth'); ?>
			<?php echo $content_for_layout; ?>
		   	<div id="TweetDiv" style="width: 200px;">
		   	</div>
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
<!--
		        <div style="width: 800px; padding-top:100px;" id="opticEmp"><a href="http://www.opticempire.com.au/oesys/aff.php?aff=010" style="float: right;"><img src="http://www.opticempire.com.au/images/oeLOGO.jpg" /></a>         </div>
-->
		        <div id="footercap">        </div>
		        <p class="footer"><i>LiNoniCo 2009</i></p>
		</div>
	</div>
	<?php echo $cakeDebug; ?>

<!-- Woopra Code Start -->
<script type="text/javascript" src="//static.woopra.com/js/woopra.v2.js"></script>
<script type="text/javascript">
woopraTracker.track();
</script>
<!-- Woopra Code End -->

<!-- Start Google Analytics Code  -->
	<script type="text/javascript">
	var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-19364495-1']);
	  _gaq.push(['_setDomainName', '.linonico.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
<!-- End Google Analytics Code -->

</body>
</html>
