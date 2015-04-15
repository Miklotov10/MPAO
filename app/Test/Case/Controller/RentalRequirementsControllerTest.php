<?php
App::uses('RentalRequirementsController', 'Controller');

/**
 * RentalRequirementsController Test Case
 *
 */
class RentalRequirementsControllerTest extends ControllerTestCase {

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
		'app.city',
		'app.account',
		'app.user',
		'app.group',
		'app.activity',
		'app.status',
		'app.requirement'
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
