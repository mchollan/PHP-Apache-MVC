<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		$auth = new Auth();
		$session = $auth->getSession();
		$user = $auth->getUser();
		
		$uploadRepo = new UploadsRepo1();
		
		$model = $uploadRepo->GetAllUploads();

		$this->view('home', $model);

		if ($session != null) {
			echo '<pre>';
			print_r($auth->getRole());



  			echo '</pre>';
		}

	}

}
