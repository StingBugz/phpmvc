<?php  

class User_model extends Controller{

	private $nama = 'syarif';
	
	public function getUser()
	{
		return $this->nama;
	}
}