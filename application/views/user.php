<?php
  /**
   * FileName.php
   * @brief  : 
   * @author : Capt. Nemo
   * @date   :
   * @version:
   */
?>
<ul>
	<?php foreach($users as $user):?>
	<li><?php echo HTML::anchor('/user/view/'.$user->userid,$user->userid);?></li>
	<?php endforeach;?>
</ul>
