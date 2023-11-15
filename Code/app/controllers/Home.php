<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		$uploadRepo = new UploadsRepo1();
		
		$model = $uploadRepo->GetAllUploads();

		$this->view('home', $model);
	}

}
