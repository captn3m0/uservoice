<?php
  /**
   * FileName.php
   * @brief  : 
   * @author : Capt. Nemo
   * @date   :
   * @version:
   */
class Model_User extends ORM{
	const MAX_VOTES = 10;
	protected $_has_many=array('ideas'=>array(),'votes'=>array(),'comments'=>array());
	public function remaining_votes()
	{
		$remaining_votes=self::MAX_VOTES;
		foreach($this->votes->find_all() as $vote)
			$remaining_votes-=$vote->weight;
		return $remaining_votes;
	}
}
?>
