<?php
App::uses('AppController', 'Controller');
/**
 * Spaces Controller
 *
 * @property Space $Space
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SpacesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Space->recursive = 0;
		$this->set('spaces', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Space->exists($id)) {
			throw new NotFoundException(__('Invalid space'));
		}
		$options = array('conditions' => array('Space.' . $this->Space->primaryKey => $id));
		$this->set('space', $this->Space->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Space->create();
			if ($this->Space->save($this->request->data)) {
				$this->Session->setFlash(__('The space has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The space could not be saved. Please, try again.'));
			}
		}
		$facilities = $this->Space->Facility->find('list');
		$genders = $this->Space->Gender->find('list');
		$this->set(compact('facilities', 'genders'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Space->exists($id)) {
			throw new NotFoundException(__('Invalid space'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Space->save($this->request->data)) {
				$this->Session->setFlash(__('The space has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The space could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Space.' . $this->Space->primaryKey => $id));
			$this->request->data = $this->Space->find('first', $options);
		}
		$facilities = $this->Space->Facility->find('list');
		$genders = $this->Space->Gender->find('list');
		$this->set(compact('facilities', 'genders'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Space->id = $id;
		if (!$this->Space->exists()) {
			throw new NotFoundException(__('Invalid space'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Space->delete()) {
			$this->Session->setFlash(__('The space has been deleted.'));
		} else {
			$this->Session->setFlash(__('The space could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
