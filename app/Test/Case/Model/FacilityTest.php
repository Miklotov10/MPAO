<?php
App::uses('Facility', 'Model');

/**
 * Facility Test Case
 *
 */
class FacilityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.facility',
		'app.facility_type',
		'app.rental_promo',
		'app.promo',
		'app.lookup_type',
		'app.lookup',
		'app.space',
		'app.gender',
		'app.rate_type',
		'app.reference',
		'app.rental_requirement',
		'app.reservation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Facility = ClassRegistry::init('Facility');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Facility);

		parent::tearDown();
	}

}
