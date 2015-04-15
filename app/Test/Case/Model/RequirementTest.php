<?php
App::uses('Requirement', 'Model');

/**
 * Requirement Test Case
 *
 */
class RequirementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.requirement',
		'app.unit_type',
		'app.lookup_type',
		'app.lookup',
		'app.facility_requirement',
		'app.facility',
		'app.facility_type',
		'app.rental_promo',
		'app.promo',
		'app.space',
		'app.gender',
		'app.rate_type',
		'app.reference',
		'app.rental_requirement',
		'app.reservation',
		'app.city',
		'app.account',
		'app.user',
		'app.group',
		'app.activity',
		'app.status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Requirement = ClassRegistry::init('Requirement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Requirement);

		parent::tearDown();
	}

}
