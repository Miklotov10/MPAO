<?php
App::uses('Reference', 'Model');

/**
 * Reference Test Case
 *
 */
class ReferenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reference',
		'app.lookup_type',
		'app.lookup',
		'app.rental_promo',
		'app.facility',
		'app.facility_type',
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
		'app.space',
		'app.gender',
		'app.promo',
		'app.rate_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reference = ClassRegistry::init('Reference');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reference);

		parent::tearDown();
	}

}
