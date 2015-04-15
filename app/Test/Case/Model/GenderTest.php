<?php
App::uses('Gender', 'Model');

/**
 * Gender Test Case
 *
 */
class GenderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gender',
		'app.lookup_type',
		'app.lookup',
		'app.space',
		'app.facility',
		'app.facility_type',
		'app.rental_promo',
		'app.promo',
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
		$this->Gender = ClassRegistry::init('Gender');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gender);

		parent::tearDown();
	}

}
