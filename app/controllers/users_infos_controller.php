<?php
class UsersInfosController extends AppController {

	var $name = 'UsersInfos';
	var $helpers = array('Html', 'Form');


	function beforeFilter() {
	    parent::beforeFilter();
            $this->Auth->allowedActions = array('add');
	    //$this->Auth->allowedActions = array('*');
	}

	function index() {
		$this->UsersInfo->recursive = 0;
		$this->set('usersInfos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid UsersInfo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('usersInfo', $this->UsersInfo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UsersInfo->create();
			if ($this->UsersInfo->save($this->data)) {
				$this->Session->setFlash(__('The UsersInfo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The UsersInfo could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UsersInfo->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid UsersInfo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersInfo->save($this->data)) {
				$this->Session->setFlash(__('The UsersInfo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The UsersInfo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersInfo->read(null, $id);
		}
		$users = $this->UsersInfo->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for UsersInfo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersInfo->del($id)) {
			$this->Session->setFlash(__('UsersInfo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>