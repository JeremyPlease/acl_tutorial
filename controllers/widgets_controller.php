<?php
class WidgetsController extends AppController {

	var $name = 'Widgets';

	function index() {
		$this->Widget->recursive = 0;
		$this->set('widgets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'widget'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('widget', $this->Widget->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Widget->create();
			if ($this->Widget->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'widget'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'widget'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'widget'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Widget->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'widget'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'widget'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Widget->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'widget'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Widget->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Widget'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Widget'));
		$this->redirect(array('action' => 'index'));
	}
}
?>