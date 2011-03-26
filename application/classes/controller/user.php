<?php
  /**
   * FileName.php
   * @brief  : This is the user controller. 
   * @author : Capt. Nemo
   * @date   : 26/3
   * @version: 0.1
   */
defined('SYSPATH') or die('No direct script access.');

Class Controller_User extends Controller_Template
{
    public $template = 'user';

	/** 
	 * Default action
	 * Will list all the users
	 */
    public function action_index()
    {
		$user = new Model_User();
        $this->template->users=$user->find_all();
        //$this->template->ideas=$user->ideas->find_all();
    }
    public function action_view($id)
    {
		$user = new Model_User();
		$user->find('userid',$id);
		$this->template='user_view';
		$this->template->user=$user;
	}
}
