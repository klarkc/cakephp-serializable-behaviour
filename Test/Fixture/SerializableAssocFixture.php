<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: Jan 19, 2014
 * Time: 1:52:58 PM
 * Format: http://book.cakephp.org/2.0/en/development/testing.html#fixtures
 */

/**
 * SerializableAssocFixture
 * 
 * @package SerializableTest
 * @subpackage Fixture
 */
class SerializableAssocFixture extends CakeTestFixture {

	/**
	 * {@inheritdoc}
	 *
	 * @var string
	 */
	public $useDbConfig = 'test';

	/**
	 * {@inheritdoc}
	 *
	 * @var string
	 */
	public $table = 'serializable_assoc';

	/**
	 * {@inheritdoc}
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'field3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'serializable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	/**
	 * {@inheritdoc}
	 *
	 * @var array
	 */
	public $records = array();

}
