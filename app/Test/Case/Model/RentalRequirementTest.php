<?php
App::uses('RentalRequirement', 'Model');

/**
 * RentalRequirement Test Case
 *
 */
class RentalRequirementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rental_requirement',
		'app.unit_type',
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
		'app.reservation',
		'app.requirement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RentalRequirement = ClassRegistry::init('RentalRequirement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RentalRequirement);

		parent::tearDown();
	}

}
