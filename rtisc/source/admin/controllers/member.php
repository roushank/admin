<?php
class Member extends Controller{

	protected function Index(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new MemberModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new MemberModel();
		$this->returnView($viewmodel->add(), true);
	}

	protected function login(){
		$viewmodel = new MemberModel();
		$this->returnView($viewmodel->login(), true);
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}
	//update
	protected function update(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new MemberModel();
		$this->returnView($viewmodel->update(), true);
	}
}
