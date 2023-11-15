<?php
interface IUploadsRepo
 {
  public function GetAllUploads();

}

class UploadsRepo1 implements IUploadsRepo {
    public function GetAllUploads() {
        $upload1 = new Upload();
		$upload1->Owner = 'Matt';
		$upload1->Status = 'New';
		
		$upload2 = new Upload();
		$upload2->Owner = 'Chris';
		$upload2->Status = 'New';
		
		return array($upload1, $upload2);
    }
  }


  class UploadsRepo2 implements IUploadsRepo {
    public function GetAllUploads() {
        $upload1 = new Upload();
		$upload1->Owner = 'Dude';
		$upload1->Status = 'New';
		
		$upload2 = new Upload();
		$upload2->Owner = 'Sweet';
		$upload2->Status = 'New';
		
		return array($upload1, $upload2);
    }
  }


?>