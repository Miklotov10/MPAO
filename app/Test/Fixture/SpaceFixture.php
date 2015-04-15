<?php
/**
 * SpaceFixture
 *
 */
class SpaceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'facility_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'gender_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'male_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'female_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'total_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'other_facility' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'facility_id' => 1,
			'gender_id' => 1,
			'male_count' => 1,
			'female_count' => 1,
			'total_count' => 1,
			'other_facility' => 1,
			'created' => '2015-04-03 17:59:50',
			'modified' => '2015-04-03 17:59:50'
		),
	);

}
