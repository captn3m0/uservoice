<?php
  /**
   * FileName.php
   * @brief  : This is the user controller. 
   * @author : Capt. Nemo
   * @date   : 26/3
   * @version: 0.1
   */
defined('SYSPATH') or die('No direct script access.');

Class Controller_User extends Controller_Site
{

	/** 
	 * Default action
	 * Will list all the users
	 */
    public function action_index()
    {
		$user = new Model_User();
		$this->template->title="List Of Users";
        $this->template->content = View::factory('user');
        $this->template->sidebar = View::factory('sidebar/user');        
        $this->template->content->users=$user->find_all();
        $this->template->content->ideas=$user->ideas->find_all();
    }
    public function action_view($id)
    {
		$user = new Model_User();
		$user->find('userid',$id);
		//$this->template='user_view';
		$this->template->content=View::factory('user_view');
		$this->template->sidebar = View::factory('sidebar/user');        
		$this->template->content->user=$user;				
		$this->template->content->listOfIdeas=View::factory('ideas');
		$this->template->content->listOfIdeas->ideas=$user->ideas->find_all();
	}
}
