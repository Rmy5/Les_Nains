<?php



class Nain{


	private $_id;
	private $_nom;
	private $_barbe;
	private $_groupe;
	private $_ville;


	public function __construct(array $donnees)
	{
		$this->hydrate($donnees);
	}

	public function hydrate(array $donnees)
	{
		foreach ($donnees as $key => $val) 
		{
			$key = substr($key, 2);
			$method = 'set'.ucfirst($key);

			if (method_exists($this, $method)) 
			{
				$this->{$method}($val);
			}
		}
	}

	public function getId(){ return $this->_id; }
	public function setId($id){ $this->_id = $id; }


	public function getNom(){ return $this->_nom; }
	public function setNom($nom){ $this->_nom = $nom; }


	public function getBarbe(){ return $this->_barbe; }
	public function setBarbe($barbe){ $this->_barbe = $barbe; }


	public function getGroupe(){ return $this->_groupe; }
	public function setGroupe($groupe){ $this->_groupe = $groupe; }


	public function getVille(){ return $this->_ville; }
	public function setVille($ville){ $this->_ville = $ville; }

}









