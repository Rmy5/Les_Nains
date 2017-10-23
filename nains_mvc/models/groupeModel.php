<?php


class groupeModel extends coreModel{


	public function getGroupe($id){

		$sql = 'SELECT g_id, g_debuttravail, g_fintravail, g_taverne_fk g_taverne, g_tunnel_fk g_tunnel  FROM groupe WHERE g_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) {
	
			$groupe = new Groupe($data[0]);

			return $groupe;
		}
		return false;
	}


	public function getAllGroupes(){

		$sql = 'SELECT g_id, g_debuttravail, g_fintravail, g_taverne_fk g_taverne, g_tunnel_fk g_tunnel FROM groupe';

		if (($data = $this->makeSelect($sql)) !== false){

			$groupes = array();

			foreach ($data as $groupe) {

				$groupes[] = new Groupe($groupe);
			}
			return $groupes;
		}
		return false;
	}



	public function getVillesTunnels($id){

		$sql = 'SELECT  vd.v_nom AS villeDepart, vd.v_id AS villeDepartId, va.v_nom AS villeArrivee, va.v_id AS villeArriveeId FROM nain n LEFT JOIN groupe g ON n.n_groupe_fk = g.g_id LEFT JOIN ville v ON n.n_ville_fk = v.v_id LEFT JOIN tunnel tu ON g.g_tunnel_fk = tu.t_id LEFT JOIN ville va ON tu.t_villearrivee_fk = va.v_id LEFT JOIN ville vd ON tu.t_villedepart_fk = vd.v_id WHERE n.n_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) {
			$data = $data[0];
			return $data;
		}

		return false;
	}


	public function getNainsByGroup($id){

		$nModel = new nainModel();
		$nains = $nModel->getNainsByGroup($id);
		return $nains;
	}

	public function getTaverne($id){

		$tModel = new taverneModel();
		$taverne = $tModel->getTaverne($id);
		return $taverne;
	}

}







