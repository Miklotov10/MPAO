<?php
App::uses('AppController', 'Controller');
/**
 * Lookups Controller
 *
 * @property Lookup $Lookup
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LookupsController extends AppController {

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
		$this->Lookup->recursive = 0;
		$this->set('lookups', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Lookup->exists($id)) {
			throw new NotFoundException(__('Invalid lookup'));
		}
		$options = array('conditions' => array('Lookup.' . $this->Lookup->primaryKey => $id));
		$this->set('lookup', $this->Lookup->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Lookup->create();
			if ($this->Lookup->save($this->request->data)) {
				$this->Session->setFlash(__('The lookup has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lookup could not be saved. Please, try again.'));
			}
		}
		$lookupTypes = $this->Lookup->LookupType->find('list');
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
		if (!$this->Lookup->exists($id)) {
			throw new NotFoundException(__('Invalid lookup'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lookup->save($this->request->data)) {
				$this->Session->setFlash(__('The lookup has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lookup could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lookup.' . $this->Lookup->primaryKey => $id));
			$this->request->data = $this->Lookup->find('first', $options);
		}
		$lookupTypes = $this->Lookup->LookupType->find('list');
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
		$this->Lookup->id = $id;
		if (!$this->Lookup->exists()) {
			throw new NotFoundException(__('Invalid lookup'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lookup->delete()) {
			$this->Session->setFlash(__('The lookup has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lookup could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
