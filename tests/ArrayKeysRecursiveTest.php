<?php

namespace LucaSantarella\Tests;

use LucaSantarella\ArrayKeysRecursive;

/**
 * ArrayKeysRecursive test suite
 *
 * @author Luca Santarella
 */
class ArrayKeysRecursiveTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var array Array used for all tests
	 */
	protected static $testArray = [
		'person' => [
			'name' => [
				'first' => 'Luca',
				'middle' => 'Michele',
				'last' => 'Santarella'
			],
			'dob' => '11/11/1999',
			'knowledge' => [
				'programming' => [
					'languages' => [
						'PHP',
						'JS',
						'HTML',
						'SQL',
						'JAVA'
					]
				]
			]
		]
	];

	/**
	 * Test basic recursive array keys.
	 *
	 * Infinite depth.
	 *
	 */
	public function testGetKeys()
	{
		$output = ArrayKeysRecursive::getKeys(self::$testArray);

		$this->assertEquals([
			'person' => [
				'name' => [
					'first',
					'middle',
					'last',
				],
				'dob',
				'knowledge' => [
					'programming' => [
						'languages' => [
							0,
							1,
							2,
							3,
							4,
						],
					],
				],
			],
		], $output);
	}

	/**
	 * Test basic recursive array keys.
	 *
	 * 2 layers depth limit.
	 *
	 */
	public function testGetKeysWithDepth()
	{
		$output = ArrayKeysRecursive::getKeys(self::$testArray, 2);
		$this->assertEquals([
			'person' => [
				'name' => [],
				'dob',
				'knowledge' => []
			],
		], $output);
	}

}