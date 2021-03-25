<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The welcome hello presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Welcome_Gridview extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */

	public function view()
	{
	

		$cols =26;
		$rows =10;
		$myColors=10;
		if (isset($_GET['rows']))
		{
			$myColors=$_GET['myColors'];
			$cols=$_GET['cols'];
			$rows=$_GET['rows'];
		}else{
			$parts = explode ("/", $_SERVER['QUERY_STRING']);
			$cnt=count($parts);
			$parts[$cnt -1]; 
			$parts[$cnt -2];
		}
		if ($cols<0||$cols>26)
		{
			die ("invalid column length");
		}
		if ($rows<0||$rows>26)
		{
			die ("invalid column length");
		}
		
		//echo $this->request()->param('cols');
		$this->rows = $this->request()->param('rows',$rows);
		$this->cols = $this->request()->param('cols',$cols);
		$this->color = $this->request()->param('myColors',$myColors);
	}
}
