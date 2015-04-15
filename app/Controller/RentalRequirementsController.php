<?php
App::uses('AppController', 'Controller');
/**
 * RentalRequirements Controller
 *
 * @property RentalRequirement $RentalRequirement
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RentalRequirementsController extends AppController {

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
		$this->RentalRequirement->recursive = 0;
		$this->set('rentalRequirements', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->RentalRequirement->exists($id)) {
			throw new NotFoundException(__('Invalid rental requirement'));
		}
		$options = array('conditions' => array('RentalRequirement.' . $this->RentalRequirement->primaryKey => $id));
		$this->set('rentalRequirement', $this->RentalRequirement->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RentalRequirement->create();
			if ($this->RentalRequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The rental requirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental requirement could not be saved. Please, try again.'));
			}
		}
		$unitTypes = $this->RentalRequirement->UnitType->find('list');
		$facilities = $this->RentalRequirement->Facility->find('list');
		$this->set(compact('unitTypes', 'facilities'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->RentalRequirement->exists($id)) {
			throw new NotFoundException(__('Invalid rental requirement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RentalRequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The rental requirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental requirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RentalRequirement.' . $this->RentalRequirement->primaryKey => $id));
			$this->request->data = $this->RentalRequirement->find('first', $options);
		}
		$unitTypes = $this->RentalRequirement->UnitType->find('list');
		$facilities = $this->RentalRequirement->Facility->find('list');
		$requirements = $this->RentalRequirement->Requirement->find('list');
		$this->set(compact('unitTypes', 'facilities', 'requirements'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->RentalRequirement->id = $id;
		if (!$this->RentalRequirement->exists()) {
			throw new NotFoundException(__('Invalid rental requirement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RentalRequirement->delete()) {
			$this->Session->setFlash(__('The rental requirement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rental requirement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
