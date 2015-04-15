<?php
App::uses('RateTypesController', 'Controller');

/**
 * RateTypesController Test Case
 *
 */
class RateTypesControllerTest extends ControllerTestCase {

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
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {
		$this->markTestIncomplete('testAdminIndex not implemented.');
	}

/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {
		$this->markTestIncomplete('testAdminView not implemented.');
	}

/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {
		$this->markTestIncomplete('testAdminAdd not implemented.');
	}

/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {
		$this->markTestIncomplete('testAdminEdit not implemented.');
	}

/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {
		$this->markTestIncomplete('testAdminDelete not implemented.');
	}

}
