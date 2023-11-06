<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		//$model = array("datax"=>"Shooty Hoops!");

		$upload1 = new Upload();
		$upload1->Owner = 'Matt';
		$upload1->Status = 'New';
		
		$upload2 = new Upload();
		$upload2->Owner = 'Chris';
		$upload2->Status = 'New';
		
		$model = array($upload1, $upload2);

		$this->view('home', $model);
	}

}
