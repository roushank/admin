<?php
class Transcation extends Controller{
	protected function Index(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new TranscationModel();
		$this->ReturnView($viewmodel->Index(), true);
	}
}