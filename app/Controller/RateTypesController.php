<?php
App::uses('AppController', 'Controller');
/**
 * RateTypes Controller
 *
 * @property RateType $RateType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RateTypesController extends AppController {

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
		$this->RateType->recursive = 0;
		$this->paginate = array('conditions' => array(
			'LookupType.name' => $this->modelClass
		));
		$this->set('rateTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->RateType->exists($id)) {
			throw new NotFoundException(__('Invalid rate type'));
		}
		$options = array('conditions' => array('RateType.' . $this->RateType->primaryKey => $id));
		$this->set('rateType', $this->RateType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RateType->create();
			if ($this->RateType->save($this->request->data)) {
				$this->Session->setFlash(__('The rate type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate type could not be saved. Please, try again.'));
			}
		}
		$lookupTypes = $this->RateType->LookupType->find('list');
		$this->set(compact('lookupTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->RateType->exists($id)) {
			throw new NotFoundException(__('Invalid rate type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RateType->save($this->request->data)) {
				$this->Session->setFlash(__('The rate type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RateType.' . $this->RateType->primaryKey => $id));
			$this->request->data = $this->RateType->find('first', $options);
		}
		$lookupTypes = $this->RateType->LookupType->find('list');
		$this->set(compact('lookupTypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->RateType->id = $id;
		if (!$this->RateType->exists()) {
			throw new NotFoundException(__('Invalid rate type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RateType->delete()) {
			$this->Session->setFlash(__('The rate type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rate type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
