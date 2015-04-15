<?php
App::uses('RateType', 'Model');

/**
 * RateType Test Case
 *
 */
class RateTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rate_type',
		'app.lookup_type',
		'app.lookup',
		'app.rental_promo',
		'app.facility',
		'app.facility_type',
		'app.rental_requirement',
		'app.unit_type',
		'app.facility_requirement',
		'app.requirement',
		'app.reservation',
		'app.city',
		'app.account',
		'app.user',
		'app.group',
		'app.activity',
		'app.status',
		'app.space',
		'app.gender',
		'app.promo',
		'app.reference'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RateType = ClassRegistry::init('RateType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RateType);

		parent::tearDown();
	}

}
