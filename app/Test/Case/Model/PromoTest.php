<?php
App::uses('Promo', 'Model');

/**
 * Promo Test Case
 *
 */
class PromoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promo',
		'app.lookup_type',
		'app.lookup',
		'app.rental_promo',
		'app.facility',
		'app.facility_type',
		'app.rental_requirement',
		'app.reservation',
		'app.space',
		'app.gender',
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
		$this->Promo = ClassRegistry::init('Promo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promo);

		parent::tearDown();
	}

}
