<?php
	
	include_once 'preuba.php';

	class ControllerPrueba extends ModelPrueba{

		public function __construct(){

			parent::__construct();
		}

		public function getUser(){

			$result = $this->db->query('select * from users');

			$users = $result->fetch_all(MYSQLI_ASSOC);

			return $users;
		}

		public function getUsersId($id){

			$sql = 'select * from users where id = $id';

			mysqli_query($this->db,$sql);

			mysqli_close($this->db);


		}
	}


