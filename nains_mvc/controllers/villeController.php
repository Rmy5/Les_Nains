<?php



class villeController extends coreController{


	public function displayAction(){

		$id = $this->getParams('id');

		$ville = $this->getModel()->getVille($id);

		$tunnels = $this->getModel()->getTunnels($id);

		$nains = $this->getModel()->getNainsVille($id);

		$tavernes = $this->getModel()->getTaverneVille($id);


		include 'views/ville/ville.php';
	}
}


