<?php
  /**
   * FileName.php
   * @brief  : The view for a particular user
   * @author : Capt. Nemo
   * @date   :
   * @version:
   */
?>
Let us display data about this particular user
Id :<?php echo $user->id ?><br>
UserID : <?php echo $user->userid?><br>
Comments : <?php echo $user->comments->count_all()?><br>
Ideas : <?php echo $user->ideas->count_all()?>
<p>
	List Of Ideas :
	<?php echo $listOfIdeas ?>
</p>
