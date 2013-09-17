<?php
class Comment extends AppModel {

	var $name = 'Comment';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Note' => array(
			'className' => 'Note',
			'foreignKey' => 'note_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>