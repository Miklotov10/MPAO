<?php
App::uses('Space', 'Model');

/**
 * Space Test Case
 *
 */
class SpaceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.space',
		'app.facility',
		'app.facility_type',
		'app.rental_promo',
		'app.promo',
		'app.lookup_type',
		'app.lookup',
		'app.rate_type',
		'app.reference',
		'app.rental_requirement',
		'app.unit_type',
		'app.requirement',
		'app.reservation',
		'app.city',
		'app.account',
		'app.user',
		'app.group',
		'app.activity',
		'app.status',
		'app.gender'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Space = ClassRegistry::init('Space');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Space);

		parent::tearDown();
	}

}
