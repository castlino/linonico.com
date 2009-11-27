<?php
class CommentsController extends AppController {

	var $name = 'Comments';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('index', 'view');
	}

	function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Comment.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}
	function add() {
		if (!empty($this->data)) {
			// Get current user's id.
			$this->data['Comment']['user_id']=$this->Auth->user('id');
			
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$comments = $this->Comment->find('all',array('conditions'=>array('note_id'=>$this->data['Comment']['note_id']) ));
				$this->set(compact('comments'));
				$this->render('add_success','ajax');
			}else{
				$this->render('add_failure', 'ajax');
				
			}
		}
	}
/*	
	function add() {
		//pr($this->data);
		//die;
		if (!empty($this->data)) {
			// Get current user's id.
			$this->data['Comment']['user_id']=$this->Auth->user('id');
			
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The Comment has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Comment could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Comment->User->find('list');
		$notes = $this->Comment->Note->find('list');
		$this->set(compact('users', 'notes'));
	}
*/
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The Comment has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comment->read(null, $id);
		}
		$users = $this->Comment->User->find('list');
		$notes = $this->Comment->Note->find('list');
		$this->set(compact('users','notes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comment->del($id)) {
			$this->Session->setFlash(__('Comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>