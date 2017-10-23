<?php

class coreModel{

	private static $_pdo;


	public function __construct()
	{
		try
		{
			self::$_pdo = new PDO('mysql:host='.HOST.';dbname='.DB.';charset=utf8', USER, PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(exception $e)
		{ 
			die('Erreur '.$e->getMessage()); 
		}
	}


	protected  function MakeStatement($sql, $params = array())
	{

		$statement = false;
		if(count($params) == 0)
		{
			$statement = self::$_pdo->query($sql);
		}
		else
		{
			if(($statement = self::$_pdo->prepare($sql)) !== false)
			{
				foreach ($params as $placeholder => $value)
				{
					if($statement->bindValue($placeholder, $value=='' ? null : $value) === false)
						return false;
				}
				if(!$statement->execute())
				{
					return false;
				}
			}
		}	
		return $statement;
	}



	protected function makeSelect($sql, $params = array(), $fetchStyle = PDO::FETCH_ASSOC, $fetchArg = NULL){

		$statement = self::MakeStatement($sql, $params);

		if($statement === false)
		{
			return false;
		}

		$data = is_null($fetchArg) ? $statement->fetchAll($fetchStyle) : $statement->fetchAll($fetchStyle, $fetchArg);
		$statement->closeCursor();

		return $data;
	}

}









