<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form');


	function login() {

	}
	 
	function logout() {
		$this->Session->setFlash('Good-Bye '.$this->Auth->user('username'));
		$this->redirect($this->Auth->logout());
	}
	
	function beforeFilter() {
	    parent::beforeFilter();
            $this->Auth->allowedActions = array('signup', 'about', 'contact');
	    //$this->Auth->allowedActions = array('*');
	}


	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
        
	function about($id = null) {

	}
        
	function contact($id = null) {

	}
        
	function signup() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
                                
                                $this->data['UsersInfo']['user_id'] = $this->User->id;
                                $this->User->UsersInfo->save($this->data);
                                
				$this->redirect(array('controller' => 'notes', 'action' => 'viewpluscomment', 4));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for User', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function initdb() {
	    $group =& $this->User->Group;
	    //Allow admins to everything
	    $group->id = 3;	//administrators
	    $this->Acl->allow($group, 'controllers');
	 
	    //allow managers to some controllers
	    $group->id = 5;	//managers
	    $this->Acl->deny($group, 'controllers');
	    $this->Acl->allow($group, 'controllers/Comments');
	    $this->Acl->allow($group, 'controllers/Notes');
	    $this->Acl->allow($group, 'controllers/Topics');
	    $this->Acl->allow($group, 'controllers/Users/logout');
	    $this->Acl->allow($group, 'controllers/Pages');
	    $this->Acl->allow($group, 'controllers/UserInfo');
	    
	    //allow users to only add and edit on posts and notes
	    $group->id = 4;	//users
	    $this->Acl->deny($group, 'controllers');        
	    $this->Acl->allow($group, 'controllers/Comments/add');
	    $this->Acl->allow($group, 'controllers/Comments/edit');
	    $this->Acl->allow($group, 'controllers/Notes/add');
	    $this->Acl->allow($group, 'controllers/Notes/edit');
	    //$this->Acl->allow($group, 'controllers/Topics/add');
	    //$this->Acl->allow($group, 'controllers/Topics/edit');
	    $this->Acl->allow($group, 'controllers/Users/logout');
	    $this->Acl->allow($group, 'controllers/Pages');
	
	//allow viewers to add and edit on comments only.
	    $group->id = 6;	//viewers
	    $this->Acl->deny($group, 'controllers');        
	    $this->Acl->allow($group, 'controllers/Comments/add');
	    $this->Acl->allow($group, 'controllers/Comments/edit');
	    $this->Acl->allow($group, 'controllers/Users/logout');
	    $this->Acl->allow($group, 'controllers/Pages');
	}

}
?>