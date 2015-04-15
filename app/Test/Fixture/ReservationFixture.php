<?php
/**
 * ReservationFixture
 *
 */
class ReservationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'position' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mobile_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telephone_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'authorized_person' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 64, 'unsigned' => false),
		'organizer' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 128, 'unsigned' => false),
		'activity_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'facility_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'account_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'headcount' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'position' => 'Lorem ipsum dolor sit amet',
			'mobile_number' => 'Lorem ipsum dolor sit amet',
			'telephone_number' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city_id' => 1,
			'authorized_person' => 1,
			'organizer' => 1,
			'activity_date' => '2015-04-03',
			'activity_id' => 1,
			'facility_id' => 1,
			'status_id' => 1,
			'account_id' => 1,
			'headcount' => 1,
			'created' => '2015-04-03 17:59:02',
			'modified' => '2015-04-03 17:59:02'
		),
	);

}
