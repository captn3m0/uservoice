<?php
  /**
   * FileName.php
   * @brief  : This is idea model which works using the ORM module 
   * from Kohana. Read the Kohana docs for more information
   * @author : Capt. Nemo
   * @date   : 26 March
   * @version: 0.1
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
		//Search through all the votes and add their weight
		foreach($this->votes->find_all() as $vote)
			$sum+=$vote->weight;
		return $sum;
	}
}
?>
