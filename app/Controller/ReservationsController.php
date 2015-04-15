<?php
App::uses('AppController', 'Controller');
/**
 * Reservations Controller
 *
 * @property Reservation $Reservation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ReservationsController extends AppController {

	public $helpers = array('Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reservation->recursive = 0;
		$this->set('reservations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
		$this->set('reservation', $this->Reservation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($facilityTypeId=2) {
		if ($this->request->is('post')) {
			$this->Reservation->create();
			$this->request->data['Reservation']['status_id'] = 2;//Pending Status by default
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'));
				return $this->redirect(array('controller' => 'accounts' ,'action' => 'index'));
			} else {
				debug($this->Reservation);
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		}
		$cities = $this->Reservation->City->find('list');
		$activities = $this->Reservation->Activity->find('list');
		$facilities = $this->Reservation->Facility->find('list',array('conditions' => array('facility_type_id' => $facilityTypeId)));
		$statuses = $this->Reservation->Status->find('list');
		$accounts = $this->Reservation->Account->find('list');
		$FacilityType = ClassRegistry::init('FacilityType');
		$RentalPromo = ClassRegistry::init('RentalPromo');
		$facilityType = $FacilityType->find('first', array('recursive' => -1, 'conditions' => array('id' => $facilityTypeId)));
		$facilityIds = array();
		//debug($facilities);
		foreach($facilities as $key => $facility) {
			$facilityIds[] = $key;
		}
		
		$RentalPromo->recursive = 0;
		$rentalPromos = $RentalPromo->find('all', array(
			'conditions' => array(
				'RentalPromo.facility_id' => $facilityIds
			)
		));

		$this->set('rentalPromos', $rentalPromos);
		$this->set(compact('cities', 'activities', 'facilities', 'statuses', 'accounts', 'facilityType', 'rentalPromos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
			$this->request->data = $this->Reservation->find('first', $options);
		}
		$cities = $this->Reservation->City->find('list');
		$activities = $this->Reservation->Activity->find('list');
		$facilities = $this->Reservation->Facility->find('list');
		$statuses = $this->Reservation->Status->find('list');
		$accounts = $this->Reservation->Account->find('list');
		$this->set(compact('cities', 'activities', 'facilities', 'statuses', 'accounts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reservation->delete()) {
			$this->Session->setFlash(__('The reservation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reservation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Reservation->recursive = 0;
		$this->set('reservations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
		$this->set('reservation', $this->Reservation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Reservation->create();
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		}
		$cities = $this->Reservation->City->find('list');
		$activities = $this->Reservation->Activity->find('list');
		$facilities = $this->Reservation->Facility->find('list');
		$statuses = $this->Reservation->Status->find('list');
		$accounts = $this->Reservation->Account->find('list');
		$this->set(compact('cities', 'activities', 'facilities', 'statuses', 'accounts'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
			$this->request->data = $this->Reservation->find('first', $options);
		}
		$cities = $this->Reservation->City->find('list');
		$activities = $this->Reservation->Activity->find('list');
		$facilities = $this->Reservation->Facility->find('list');
		$statuses = $this->Reservation->Status->find('list');
		$accounts = $this->Reservation->Account->find('list');
		$this->set(compact('cities', 'activities', 'facilities', 'statuses', 'accounts'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reservation->delete()) {
			$this->Session->setFlash(__('The reservation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reservation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
