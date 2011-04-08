<form class="suggest">
I suggest you
<div class="suggest_inner">
<input autocomplete="off" maxlength="100" size="50" type="text" placeholder="enter your idea">
<input type="submit" class="suggest_button" value="Suggest">
</div>
</form>
<ol class="tabs">
	<li class="current"><a href="#">Top<small> Ideas</small></a></li>
	<li class=""><a href="#">Hot</a></li>
	<li class=""><a href="#">Accepted</a></li>
	<li class=""><a href="#">Completed</a></li>
</ol>
<?php echo $ideasRender; ?>
