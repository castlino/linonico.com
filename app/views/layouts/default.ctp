
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
						<a class="twitter-timeline" href="https://twitter.com/castlino" data-widget-id="344952785260908545">Tweets by @castlino</a>
						<script>
							!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
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
<!-- Start of Woopra Code -->
<script>
(function(){
    var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
})("woopra");

woopra.config({
    domain: 'notes.linonico.com'
});
woopra.track();
</script>
<!-- End of Woopra Code -->

<script> /* Woopra Trackers */
/* Place this on a template where a customer initially is identified
   or after authentication. (Important: Update these values) */
woopra.identify({
    email: '{{ notsetup@just.yet }}',
    name: '{{ account.name }}',
    company: '{{ account.company }}'
});
// The identify code should be added before the "track()" function
woopra.track();

/* Below is an example of a "payment" event that is sent when 
   you process a payment for a customer. */
woopra.track('payment', {
    amount: '49.95',
    currency: 'USD'
});
</script>


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
