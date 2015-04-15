<?php
App::uses('AppController', 'Controller');
/**
 * FacilityTypes Controller
 *
 * @property FacilityType $FacilityType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FacilityTypesController extends AppController {

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
		$this->FacilityType->recursive = 0;
		$this->set('facilityTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FacilityType->exists($id)) {
			throw new NotFoundException(__('Invalid facility type'));
		}
		$options = array('conditions' => array('FacilityType.' . $this->FacilityType->primaryKey => $id));
		$this->set('facilityType', $this->FacilityType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FacilityType->create();
			if ($this->FacilityType->save($this->request->data)) {
				$this->Session->setFlash(__('The facility type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facility type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->FacilityType->exists($id)) {
			throw new NotFoundException(__('Invalid facility type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FacilityType->save($this->request->data)) {
				$this->Session->setFlash(__('The facility type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facility type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FacilityType.' . $this->FacilityType->primaryKey => $id));
			$this->request->data = $this->FacilityType->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->FacilityType->id = $id;
		if (!$this->FacilityType->exists()) {
			throw new NotFoundException(__('Invalid facility type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FacilityType->delete()) {
			$this->Session->setFlash(__('The facility type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The facility type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
