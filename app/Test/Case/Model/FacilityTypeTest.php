<?php
App::uses('FacilityType', 'Model');

/**
 * FacilityType Test Case
 *
 */
class FacilityTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.facility_type',
		'app.facility',
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
		$this->FacilityType = ClassRegistry::init('FacilityType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FacilityType);

		parent::tearDown();
	}

}
