<?php
/**
 * RentalPromoFixture
 *
 */
class RentalPromoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'facility_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'promo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'space_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'rate_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'aircon' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'aircon_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'aircon_cost' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'aircon_succeeding_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'aircon_succeeding_cost' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'facility_id' => 1,
			'promo_id' => 1,
			'space_id' => 1,
			'rate_type_id' => 1,
			'reference_id' => 1,
			'aircon' => 1,
			'aircon_count' => 1,
			'aircon_cost' => 1,
			'aircon_succeeding_count' => 1,
			'aircon_succeeding_cost' => 1,
			'created' => '2015-04-03 17:57:30',
			'modified' => '2015-04-03 17:57:30'
		),
	);

}
