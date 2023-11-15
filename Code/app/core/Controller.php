<?php 


Trait Controller
{
	///
	/// Method used to render the view.
	/// Takes a view name, an optional layout view, and an option data (model)
	///
	public function view($name, $data = [], $layout = "")
	{
		// if model data was passed in, extact it to its own variables 
		// so it can be rendered in the view.
		if(!empty($data)){
			extract($data);
		}
		// if no layout page is passed in use the default layout page
		$layoutPage = $this->setLayoutPage($layout);
		
		if(file_exists($layoutPage))
		{
			// get the view to load
			$filename = "./app/views/".$name.".view.php";
			if(file_exists($filename))
			{
				// put the view into the renderBody 
				$renderBody = $filename;
				require $layoutPage;
			} else{
				// could not find the view, render the 404 page
				$this->render404();
			}
		}		
		else{
			// could not find the layout view, render the 404 page
			$this->render404();
		}
	}

	///
	/// Renders the 404 page
	///
	private function render404()
	{
		$filename = "./app/views/404.view.php";
		require $filename;
	}

	///
	/// Sets the layout page
	/// if no layout is specificed we use the default 
	/// otherwise we get it from the location specified by
	/// the name passed in 
	///
	private function setLayoutPage($layout)
	{
		if(strlen($layout) == 0)
		{
			return "./app/views/_layout.php";
		} 

		return "./app/".$layout.".php";
	}

}