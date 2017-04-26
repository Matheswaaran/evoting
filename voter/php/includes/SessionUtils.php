<?php
	CLASS SessionUtil{
		function __construct(){
			session_start();
		}

		public function VoterLogin($id,$username,$gvoted,$pvoted,$approved) {
			$_SESSION['voter_id'] = $id;
			$_SESSION['voter_username'] = $username;
			$_SESSION['voter_gvoted'] = $gvoted;
			$_SESSION['voter_pvoted'] = $pvoted;
			$_SESSION['voter_approved'] = $approved;
		}

		public function Logout() {
			session_destroy();
			return true;
		}
	}

?>