<?php
	CLASS SessionUtil{
		function __construct(){
			session_start();
		}

		public function VoterLogin($id,$username,$gvoted,$pvoted) {
			$_SESSION['login_id'] = $id;
			$_SESSION['login_username'] = $username;
			$_SESSION['gvoted'] = $gvoted;
			$_SESSION['pvoted'] = $pvoted;
		}

		public function Logout() {
			session_destroy();
			return true;
		}
	}

?>