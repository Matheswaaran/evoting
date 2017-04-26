<?php
	CLASS SessionUtil{
		function __construct(){
			session_start();
		}

		public function ElectionLogin($id,$username,$email) {
			$_SESSION['election_id'] = $id;
			$_SESSION['election_username'] = $username;
			$_SESSION['election_email'] = $email;
		}

		public function Logout() {
			session_destroy();
			return true;
		}
	}

?>