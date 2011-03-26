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
<?php foreach($ideas as $idea):?>
<div class="idea">
	<div class="votebox">
		<div class="votebox_points">
			<div class="points"><?php echo $idea->count_votes();?></div>
			<div class="votebox_points_lower">votes</div>
		</div>	
		<button class="votebutton">vote</button>
	</div>
	<div class="idea_content">
		<?php echo HTML::anchor('/idea/view/'.$idea->id,$idea->title,array('class'=>'idea_title'));?>
		<div class="idea_text"><?php echo nl2br($idea->text);?></div>
		<div class="idea_lower">by <?php echo HTML::anchor('/user/view/'.$idea->user->userid,$idea->user->userid).' | '.HTML::anchor('/idea/view/'.$idea->id,$idea->comments->count_all().' comments');?></div>
		<?php if(!empty($idea->status)):?>
			<div class="idea_response">
				<div class="idea_status">
					<strong>Status: </strong>
					<span class="status-tag"><?php echo $idea->status;?></span>
				</div>
				<div class="response_text"><?php echo $idea->response->text;?></div>
				<div class="vcard">
				  <img src="<?php echo ('/media/images/'.$idea->user->userid.'.jpg')?>" width="25">
				  <?php echo HTML::anchor('/user/view/'.$idea->user->userid,$idea->user->userid)?>
				</div>
			</div>
		<?php endif;?>
	</div>
</div>
<?php endforeach;?>
