<?php 

class Game_model{


	//koneksi menggunakan database
	// private $dbh; //database handler
	// private $stmt; //statement

	// public function __construct()
	// {
	// 	//data source name
	// 	$dsn = 'mysql:host=localhost;dbname=db_phpmvc';
	// 	try {

	// 		$this->dbh = new PDO($dsn,'root','');
			
	// 	} catch (PDOException $e) {
	// 		die($e->getMessage());
	// 	}
	// }

	private $table = 'tb_game';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllGame()
	{
		$this->db->query("SELECT * FROM ". $this->table." ORDER BY nama_game ASC");
		return $this->db->resultSet();
	}

	public function getGameById($id)
	{
		$this->db->query("SELECT * FROM tb_game WHERE id_game=:id_game");
		$this->db->bind('id_game', $id);
		return $this->db->single();
	}

	public function tambahGame($data)
	{
		$query = "INSERT INTO tb_game VALUES ('',:name, :genre, :device, :developer)";

		$this->db->query($query);

		$this->db->bind('name',$data["game_name"]);
		$this->db->bind('genre',$data["genre"]);
		$this->db->bind('device',$data["device"]);
		$this->db->bind('developer',$data["developer"]);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteGame($id)
	{
		$query = "DELETE FROM tb_game WHERE id_game = :id_game";
		$this->db->query($query);
		$this->db->bind('id_game',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function Game($id)
	{
		
	}
}