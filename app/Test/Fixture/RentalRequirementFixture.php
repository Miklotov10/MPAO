<?php
/**
 * RentalRequirementFixture
 *
 */
class RentalRequirementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'unit_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'facility_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'requirement_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'price' => 1,
			'unit_type_id' => 1,
			'facility_id' => 1,
			'requirement_id' => 1,
			'created' => '2015-04-03 17:58:08',
			'modified' => '2015-04-03 17:58:08'
		),
	);

}
