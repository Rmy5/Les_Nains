<?php


class groupeController extends coreController{



	public function displayAction(){

		$id = $this->getParams('id');

		$groupe = $this->getModel()->getGroupe($id);

		$nains = $this->getModel()->getNainsByGroup($id);

		if (!is_null($groupe->getTaverne())) {
			
			$taverne = $this->getModel()->getTaverne($groupe->getTaverne());
		}

		
		$tunnels = $this->getModel()->getVillesTunnels($nains[0]->getId());


		include 'views/groupe/groupe.php';
	}
}