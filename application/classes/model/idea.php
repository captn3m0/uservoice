<?php
  /**
   * FileName.php
   * @brief  : 
   * @author : Capt. Nemo
   * @date   :
   * @version:
   */
class Model_Idea extends ORM{
	//An idea belongs to a user
	protected $_belongs_to = array('user' => array());
	//An idea has many votes and comments
	protected $_has_many=array('votes'=>array(),'comments'=>array());
	//An idea may have only one response
	protected $_has_one=array('response'=>array());
	/**
	 * This function counts the votes
	 * for this idea and returns an integer
	 */
	public function count_votes()
    {
		$sum=0;
		//Search through all the votes and commit
		foreach($this->votes->find_all() as $vote)
			$sum+=$vote->weight;
		return $sum;
	}
}
?>
