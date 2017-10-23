<?php


class Taverne{


	private $_id;
	private $_nom;
	private $_chambres;
	private $_blonde;
	private $_brune;
	private $_rousse;
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


	public function getChambres(){ return $this->_chambres; }
	public function setChambres($chambres){ $this->_chambres = $chambres; }


	public function getBlonde(){ return $this->_blonde; }
	public function setBlonde($blonde){ $this->_blonde = $blonde; }



	public function getBrune(){ return $this->_brune; }
	public function setBrune($brune){ $this->_brune = $brune; }



	public function getRousse(){ return $this->_rousse; }
	public function setRousse($rousse){ $this->_rousse = $rousse; }



	public function getVille(){ return $this->_ville; }
	public function setVille($ville){ $this->_ville = $ville; }



}




















