<?php
class NotesController extends AppController {

	var $name = 'Notes';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('index', 'view', 'viewpluscomment');
	}

	function afterFind($results) {
		foreach ($results as $key => $val) {
			if (isset($val['Comment']['created'])) {
				$results[$key]['Comment']['created'] = $this->dateFormatAfterFind($val['Comment']['created']);
			}
		}
		return $results;
	}
	
	function dateFormatAfterFind($dateString) {
		return date('dMY, H:i a', strtotime($dateString));
	}

	function index() {
		$this->Note->recursive = 0;
		$this->set('notes', $this->paginate());
	}

	function viewpluscomment($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Note.', true));
			$this->redirect(array('action'=>'index'));
			
		}
		$note = $this->Note->read(null, $id);
		$comments = $this->afterFind( $this->Note->Comment->find('all', array('conditions'=>array('Note.id'=>$id))) );

		$this->set(compact('note', 'comments'));
	}
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Note.', true));
			$this->redirect(array('action'=>'index'));
			
		}
		$this->set('note', $this->Note->read(null, $id));
	}
	
	
	function uploadImage() {
		if(!$this->data['Note']['upload_img']){
			$this->set('error','You must select an image to upload.');
			$this->render('upload_image', 'ajax');
		}else{
			$file = $this->data['Note']['upload_img']['tmp_name'];
			$newFName = $this->_rand_str()."_".date('dMY_His')."_".$this->data['Note']['upload_img']['name'];
			//pr($this->_rand_str());
			//pr(date('dMY-His'));
			//pr($file);
			//pr($this->data['Post']['upload_img']['name']);
			
			move_uploaded_file($file, "notesimgs/".$newFName);
			$this->set('noteBody',$this->data['Note']['body'] );
			$this->set('imgPath', "<img src='/notesimgs/".$newFName."'/>");
			sleep(5);
			$this->render('upload_image', 'ajax');
		}
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->data['Note']['user_id'] = $this->Auth->user('id');
			
			$this->Note->create();
			if ($this->Note->save($this->data)) {
				$this->Session->setFlash(__('The Note has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Note could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Note->User->find('list');
		$topics = $this->Note->Topic->find('list');
		$this->set(compact('users', 'topics'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Note', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Note->save($this->data)) {
				$this->Session->setFlash(__('The Note has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Note could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Note->read(null, $id);
		}
		$users = $this->Note->User->find('list');
		$topics = $this->Note->Topic->find('list');
		$this->set(compact('users','topics'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Note', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Note->del($id)) {
			$this->Session->setFlash(__('Note deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>