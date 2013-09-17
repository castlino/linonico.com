<?php
class InfosController extends AppController {

	var $name = 'Infos';
	var $uses = null;
	
	function beforeFilter(){
		parent::beforeFilter(); 
		$this->Auth->allowedActions = array('*');
	}

 	function showLinks(){
		$this->set('link','links here.');
	}	


}

?>
