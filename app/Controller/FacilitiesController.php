<?php
App::uses('AppController', 'Controller');
/**
 * Facilities Controller
 *
 * @property Facility $Facility
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FacilitiesController extends AppController {

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
		$this->Facility->recursive = 0;
		$this->set('facilities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Facility->exists($id)) {
			throw new NotFoundException(__('Invalid facility'));
		}
		$options = array('conditions' => array('Facility.' . $this->Facility->primaryKey => $id));
		$this->set('facility', $this->Facility->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Facility->create();
			if ($this->Facility->save($this->request->data)) {
				$this->Session->setFlash(__('The facility has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facility could not be saved. Please, try again.'));
			}
		}
		$facilityTypes = $this->Facility->FacilityType->find('list');
		$this->set(compact('facilityTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Facility->exists($id)) {
			throw new NotFoundException(__('Invalid facility'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Facility->save($this->request->data)) {
				$this->Session->setFlash(__('The facility has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facility could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Facility.' . $this->Facility->primaryKey => $id));
			$this->request->data = $this->Facility->find('first', $options);
		}
		$facilityTypes = $this->Facility->FacilityType->find('list');
		$this->set(compact('facilityTypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Facility->id = $id;
		if (!$this->Facility->exists()) {
			throw new NotFoundException(__('Invalid facility'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Facility->delete()) {
			$this->Session->setFlash(__('The facility has been deleted.'));
		} else {
			$this->Session->setFlash(__('The facility could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
