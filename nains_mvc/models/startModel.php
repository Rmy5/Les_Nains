<?php


class startModel extends coreModel{


	public function getAllNains(){

		$nModel = new nainModel();
		$nains = $nModel->getAllNains();
		return $nains;
	}


	public function getAllVilles(){

		$vModel = new villeModel();
		$villes = $vModel->getAllVilles();
		return $villes;
	}


	public function getAllGroupes(){

		$gModel = new groupeModel();
		$groupes = $gModel->getAllGroupes();
		return $groupes;
	}


	public function getAllTavernes(){

		$tModel = new taverneModel();
		$groupes = $tModel->getAllTavernes();
		return $groupes;
	}
}