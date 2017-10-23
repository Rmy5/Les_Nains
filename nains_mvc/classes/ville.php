<?php


class Ville{


	private $_id;
	private $_nom;
	private $_superficie;
	


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


	public function getSuperficie(){ return $this->_superficie; }
	public function setSuperficie($superficie){ $this->_superficie = $superficie; }





}