<?php
  /**
   * FileName.php
   * @brief  : This is the default controller. 
   * @author : Capt. Nemo
   * @date   : 26/3
   * @version: 0.1
   */
defined('SYSPATH') or die('No direct script access.');

Class Controller_Idea extends Controller_Site
{
	
	/** 
	 * This is the default action
	 * Here we show the home page
	 */
    public function action_index()
    {
		$this->template->title = 'Uservoice';//Set the title of the page
        $idea = new Model_Idea();//The blank model 
		//Set the view for content box
        $this->template->content = View::factory('home');
        //Similarly set the sidebar for home page
        $this->template->sidebar = View::factory('sidebar/home');
        $this->template->content->ideasRender = View::factory('ideas');//This view renders multiple ideas
        $this->template->content->ideasRender->ideas=$idea->find_all(); //And the data that it will use.        
        
    }
    /**
     * This is the action where we are inside
     * a particular idea
     * We show things related to that idea only
     */
    public function action_view($id)
    {
		$idea=new Model_Idea($id);
		$this->template->content=View::factory('idea');//Set the view for content variable inside template
		$this->template->sidebar=View::factory('sidebar/idea');//Similarly for the sidebar
		//Note that there are different sidebars for different purposes in the app
		$this->template->content->idea=$idea;//Set the view variables
	}
}
