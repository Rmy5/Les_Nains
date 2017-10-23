<?php



class Groupe{


	private $_id;
	private $_debuttravail;
	private $_fintravail;
	private $_taverne;
	private $_tunnel;


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


	public function getDebuttravail(){ return $this->_debuttravail; }
	public function setDebuttravail($debuttravail){ $this->_debuttravail = $debuttravail; }


	public function getFintravail(){ return $this->_fintravail; }
	public function setFintravail($fintravail){ $this->_fintravail = $fintravail; }


	public function getTaverne(){ return $this->_taverne; }
	public function setTaverne($taverne){ $this->_taverne = $taverne; }


	public function getTunnel(){ return $this->_tunnel; }
	public function setTunnel($tunnel){ $this->_tunnel = $tunnel; }

}














