<?php
class Dashboard extends Controller{
	protected function Index(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new DashboardModel();
		$this->ReturnView($viewmodel->Index(), true);
	}
}