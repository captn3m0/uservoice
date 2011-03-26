<!doctype html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title><?php echo $title ?></title>
	  <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
	  <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
  </head>
  <body>
	<div id="header">
		<div id="logo">SDSLabs UserVoice</div>
		<button id="login">Login</button>
		<div class="clear"></div>
	</div>
	  <div id="container">
		<div id="content">
			<?php echo $content ?>
		</div>
		<div id="sidebar">
			<div id="status" class="has-votes">
				<h4 id="points-remaining">
				  <strong>10</strong> votes left!
				</h4>
				<ul class="help">
				  <li><a href="#">What happens if I run out?</a></li>
				</ul>
				<h3>Your Ideas</h3>
		  </div>
		</div>
		<div class="clear"></div>  
	  </div>
	  
  </body>
</html>
