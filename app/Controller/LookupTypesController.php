<?php
App::uses('AppController', 'Controller');
/**
 * LookupTypes Controller
 *
 * @property LookupType $LookupType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LookupTypesController extends AppController {

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
		$this->LookupType->recursive = 0;
		$this->set('lookupTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LookupType->exists($id)) {
			throw new NotFoundException(__('Invalid lookup type'));
		}
		$options = array('conditions' => array('LookupType.' . $this->LookupType->primaryKey => $id));
		$this->set('lookupType', $this->LookupType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LookupType->create();
			if ($this->LookupType->save($this->request->data)) {
				$this->Session->setFlash(__('The lookup type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lookup type could not be saved. Please, try again.'));
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
		if (!$this->LookupType->exists($id)) {
			throw new NotFoundException(__('Invalid lookup type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LookupType->save($this->request->data)) {
				$this->Session->setFlash(__('The lookup type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lookup type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LookupType.' . $this->LookupType->primaryKey => $id));
			$this->request->data = $this->LookupType->find('first', $options);
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
		$this->LookupType->id = $id;
		if (!$this->LookupType->exists()) {
			throw new NotFoundException(__('Invalid lookup type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LookupType->delete()) {
			$this->Session->setFlash(__('The lookup type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lookup type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
