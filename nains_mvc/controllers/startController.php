<?php


class startController extends coreController{


	public function selectAction(){


		$nains = $this->getModel()->getAllNains();
		$villes = $this->getModel()->getAllVilles();
		$groupes = $this->getModel()->getAllGroupes();
		$tavernes = $this->getModel()->getAllTavernes();

		include 'views/start/start.php';
	}


	public function makeForm(array $data){

		$name = strtolower(get_class($data[0]));

        echo '<form action="" method="GET"><div class="selectStyle"><select name="id" onchange="this.form.submit()"><option value="" disabled selected>Les '.$name.'s</option>';

        foreach ($data as $val) {

        	if (method_exists($val, 'getNom')) {

        		echo '<option value="'.$val->getId().'">'.$val->getNom().'</option>';
        	}
        	else echo '<option value="'.$val->getId().'">'.$val->getId().'</option>';    
        }

        echo '</select><input type="hidden" name="c" value="'.$name.'">
              <input type="hidden" name="a" value="display"></div></form>';
	}

}