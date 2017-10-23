<?php


class coreController{


	private $_params = array();
	private $_data = array();
	private $_model;

	public function __construct(){

		$className = get_class($this);
		$modelName = substr($className, 0, -10);
		$modelName .= 'Model';
		$this->_model = new $modelName();
	}

	protected function getModel(){

		return $this->_model;
	}

	public function accessParams(array $params, $key){

		return $this->_params[$key];
	}


	public function getParams($key){

		return $this->accessParams($this->_params, $key);
	}


	public function setParams(array $params){

		$this->_params = $params;
	}


	public function callActionName($actionName){

        $action = str_replace(' ', '', lcfirst(ucwords(strtolower($actionName)))) . 'Action';

        if(method_exists($this, $action)){

            $this->$action();
        }
    }



    
}