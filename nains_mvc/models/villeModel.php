<?php


class villeModel extends coreModel{


	public function getAllVilles(){

		$sql = 'SELECT * FROM ville';

		if (($data = $this->makeSelect($sql)) !== false){

			$villes = array();

			foreach ($data as $ville) {

				$villes[] = new Ville($ville);
			}
			return $villes;
		}

		return false;
	}


	public function getVille($id){

		$sql = 'SELECT * FROM ville WHERE v_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) {
			
			
			$ville = new Ville($data[0]);

			return $ville;
		}

		return false;
	}



	public function getTunnels($id){

		$sql1 = 'SELECT v.*, t1.t_villearrivee_fk AS tunnelVers, t1.t_progres, v2.v_nom, v2.v_id as id2 FROM ville v INNER JOIN tunnel t1 ON v.v_id = t1.t_villedepart_fk INNER JOIN ville v2 ON t1.t_villearrivee_fk = v2.v_id WHERE v.v_id = :id1 UNION SELECT v.*, t1.t_villedepart_fk AS tunnelDe, t1.t_progres, v2.v_nom, v2.v_id as id2 FROM ville v INNER JOIN tunnel t1 ON v.v_id = t1.t_villearrivee_fk INNER JOIN ville v2 ON t1.t_villedepart_fk = v2.v_id WHERE v.v_id = :id2';
		

		if ( ($tunnels = $this->makeSelect($sql1, array(':id1' => $id, ':id2' => $id))) !== false) {

			return $tunnels;
		}
		return false;

	}

	public function getNainsVille($id){

		$nModel = new nainModel();
		$nains = $nModel->getNainsVille($id);
		return $nains;
	}

	public function getTaverneVille($id){

		$tModel = new taverneModel();
		$tavernes = $tModel->getTaverneVille($id);
		return $tavernes;
	}

} 












