<?php
App::uses('RentalPromo', 'Model');

/**
 * RentalPromo Test Case
 *
 */
class RentalPromoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rental_promo',
		'app.facility',
		'app.facility_type',
		'app.rental_requirement',
		'app.reservation',
		'app.space',
		'app.gender',
		'app.lookup_type',
		'app.lookup',
		'app.promo',
		'app.rate_type',
		'app.reference'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RentalPromo = ClassRegistry::init('RentalPromo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RentalPromo);

		parent::tearDown();
	}

}
