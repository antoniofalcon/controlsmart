<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu{

	/**
	*This is a class to generate menu dinamicly 
	 */
	private $arr_menu;
	public function __construct($arr){
		$this->arr_menu = $arr;
	}
	public function buildMenu()
	{
		$output ='<nav><ul>';
		foreach ($this->arr_menu as $item) {
			$output .='<li>'.$item.'</li>';
		}
		$output .='</ul></nav>';
		return $output;
	}
}
?>