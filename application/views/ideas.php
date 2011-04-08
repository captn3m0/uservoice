<?php foreach($ideas as $idea):
$ideaView=View::factory('idea');
$ideaView->idea=$idea;
echo $ideaView;
endforeach;?>
