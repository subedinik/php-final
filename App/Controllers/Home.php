<?php

namespace App\Controllers;
use \Core\View;



class Home extends \Core\Controller
{
	public function indexAction()
	{
		view::renderTemplate('index.html');
	
	}
	protected function before()
	{
		// echo "(before)";

	}

	protected function after()
	{
		// echo "(after)";
	}

	public function clickmeAction()
	{
		view::renderTemplate('afterclick.html');
	}

	public function viewaddress()
	{
		$data = $_GET['location'];
		
		view::renderTemplate('index.php', $data);
		//$data = ['address'=>$location];
		//view::renderTemplate('index.html', $data);
	}
	//phase 1-a
	public function phasea()
	{
		view::renderTemplate('phase1a.html');
	}

	//phase 1-b
	public function phaseb()
	{
		view::renderTemplate('phase1b.html');
	}
	//phase 1-c
	public function phasec()
	{
		view::renderTemplate('phase1c.html');
	}

	//phase 1-b
	public function phased()
	{
		view::renderTemplate('phase1d.html');
	}

}
