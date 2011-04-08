<?php
  /**
   * FileName.php
   * @brief  : 
   * @author : Capt. Nemo
   * @date   :
   * @version:
   */
class Model_Comment extends ORM{
	protected $_belongs_to = array('idea' => array(),'user'=>array());
}
?>
