<?php  

class Game extends Controller{
	public function index()
	{
		$data["judul"] = 'Game List';
		$game = $this->model("Game_model")->getAllGame();
		$this->view("templates/header",$data);
		$this->view("Game/index",$game);
		$this->view("templates/footer");
	}

	public function detail($id)
	{
		$data["judul"] = "Detail Game";
		$game = $this->model("Game_model")->getGameById($id);
		$this->view('templates/header',$data);
		$this->view('Game/detail', $game);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if ($this->model("Game_model")->tambahGame($_POST) > 0) {

			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header("Location: ".base_url."/Game");
		}
		else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header("Location:". base_url ."/Game");
		}
	}

	public function delete($id)
	{
		if ($this->model('Game_model')->deleteGame($id) > 0) {
			Flasher::setFlash('berhasil','dihapus','success');
			header("Location:".base_url."/Game");
		}
		else{
			Flasher::setFlash('gagal','dihapus','danger');
			header("Location:".base_url."/Game");
		}
	}

	public function getUbah()
	{
		echo $_POST['id'];
		// echo json_encode( $this->model("Game_model")->getGameById($_POST['id']) );
	}
	
}