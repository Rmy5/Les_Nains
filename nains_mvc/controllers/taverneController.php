<?php


class taverneController extends coreController{


	public function displayAction(){

		$id = $this->getParams('id');

		$taverne = $this->getModel()->getTaverne($id);

		$ville = $this->getModel()->getVille($taverne->getVille());

		$count = $this->getModel()->getChambresLibres($taverne->getId());


		include 'views/taverne/taverne.php';
	}
}