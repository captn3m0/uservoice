<?php
  /**
   * FileName.php
   * @brief  : 
   * @author : Capt. Nemo
   * @date   :
   * @version:
   */
class Model_Vote extends ORM{
	protected $_belongs_to = array('idea' => array(),'user'=>array());
}
?>
