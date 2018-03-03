<?php

class Shares extends Controller{
	protected function index(){
		$model = new SharesModel();
		$viewmodel = $model->index();
		$this->ReturnView($viewmodel,true);
		return 1;
	}
}

?>