<?php
class Topic extends AppModel {

	var $name = 'Topic';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Note' => array(
			'className' => 'Note',
			'foreignKey' => 'topic_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>