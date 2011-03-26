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
		<?php foreach($idea->comments->find_all() as $comment):?>
		<div class="comment">
			<div class="votebox">
				<div class="votebox_points">
					<div class="points"><?php echo $comment->user->votes->find('idea_id',$idea->id)->weight;//Got to the user who posted this comment and find his vote which was given to this idea, and then check its weight?></div>
					<div class="votebox_points_lower">votes</div>
				</div>
			</div>
			<div class="comment_content">
				<?php echo HTML::anchor('/user/view/'.$comment->user->userid,$comment->user->userid,array('class'=>'comment_user'))?>
				<div class="comment_text"><?php echo $comment->text?></div>
				<div class="comment_time"><?php echo Date::fuzzy_span($comment->time);?></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php endforeach;?>
	</div>
</div>
