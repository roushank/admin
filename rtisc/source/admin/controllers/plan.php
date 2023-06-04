<?php

class Plan extends Controller{

	protected function Index(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new PlanModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new PlanModel();
		$this->returnView($viewmodel->add(), true);
	}

}