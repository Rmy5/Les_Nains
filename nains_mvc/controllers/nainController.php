<?php


class nainController extends coreController{


	public function displayAction(){

		$id = $this->getParams('id');

		$nain = $this->getModel()->getNain($id);

		$ville = $this->getModel()->getVille($nain->getVille());

		if (!is_null($nain->getGroupe())) {
			
			$groupe = $this->getModel()->getGroupe($nain->getGroupe());

			if (!is_null($groupe->getTaverne())){

				$taverne = $this->getModel()->getTaverne($groupe->getTaverne());
			}

			$VillesTunnel = $this->getModel()->getVillesTunnels($id);
		}
		

		include 'views/nain/nain.php';
	}
}