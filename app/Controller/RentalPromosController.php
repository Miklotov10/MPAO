<?php
App::uses('AppController', 'Controller');
/**
 * RentalPromos Controller
 *
 * @property RentalPromo $RentalPromo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RentalPromosController extends AppController {

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
		$this->RentalPromo->recursive = 0;
		$this->set('rentalPromos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->RentalPromo->exists($id)) {
			throw new NotFoundException(__('Invalid rental promo'));
		}
		$options = array('conditions' => array('RentalPromo.' . $this->RentalPromo->primaryKey => $id));
		$this->set('rentalPromo', $this->RentalPromo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RentalPromo->create();
			if ($this->RentalPromo->save($this->request->data)) {
				$this->Session->setFlash(__('The rental promo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental promo could not be saved. Please, try again.'));
			}
		}
		$facilities = $this->RentalPromo->Facility->find('list');
		//$promos = $this->RentalPromo->Promo->find('list');
		$spaces = $this->RentalPromo->Space->find('list');
		$rateTypes = $this->RentalPromo->RateType->find('list', array('conditions' => array('RateType.lookup_type_id' => 7)));
		$references = $this->RentalPromo->Reference->find('list', array('conditions' => array('Reference.lookup_type_id' => 8)));
		$this->set(compact('facilities', /*'promos',*/ 'spaces', 'rateTypes', 'references'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->RentalPromo->exists($id)) {
			throw new NotFoundException(__('Invalid rental promo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RentalPromo->save($this->request->data)) {
				$this->Session->setFlash(__('The rental promo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental promo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RentalPromo.' . $this->RentalPromo->primaryKey => $id));
			$this->request->data = $this->RentalPromo->find('first', $options);
		}
		$facilities = $this->RentalPromo->Facility->find('list');
		$promos = $this->RentalPromo->Promo->find('list');
		$spaces = $this->RentalPromo->Space->find('list');
		$rateTypes = $this->RentalPromo->RateType->find('list');
		$references = $this->RentalPromo->Reference->find('list');
		$this->set(compact('facilities', 'promos', 'spaces', 'rateTypes', 'references'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->RentalPromo->id = $id;
		if (!$this->RentalPromo->exists()) {
			throw new NotFoundException(__('Invalid rental promo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RentalPromo->delete()) {
			$this->Session->setFlash(__('The rental promo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rental promo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function get_rental_promos() {
		$Facility = ClassRegistry::init('Facility');
		$facilityId = $this->request->data['Reservation']['facility_id'];
		$facility = $Facility->find('first', array('recursive' => -1,'conditions' => array('Facility.id' => $facilityId)));
		$facilities = $Facility->find('all', array('all', array('conditions' => array('Facility.facility_type_id' => $facility['Facility']['facility_type_id']))));
		foreach($facilities as $facility) {
			$facilityIds[] = $facility['Facility']['id'];	
		}
		
		$this->RentalPromo->recursive = 0;
		$rentalPromos = $this->RentalPromo->find('all', array(
			'conditions' => array(
				'RentalPromo.facility_id' => $facilityIds
			)
		));

		$this->set('rentalPromos', $rentalPromos);
		$this->layout = 'ajax';
	}
}
