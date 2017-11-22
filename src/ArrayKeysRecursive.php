<?php
/**
 * Created by PhpStorm.
 * User: lucasantarella
 * Date: 11/22/17
 * Time: 11:46 AM
 */

namespace LucaSantarella;

class ArrayKeysRecursive
{

	/**
	 * @param array $input Input array for getting keys of
	 * @param int $maxDepth Max depth to traverse the array
	 * @return array
	 */
	public static function getKeys($input, $maxDepth = INF)
	{
		return self::array_keys_recursive($input, $maxDepth);
	}

	/**
	 * @param $input
	 * @param $maxDepth
	 * @param int $depth
	 * @param array $arrayKeys
	 * @return array
	 */
	private static function array_keys_recursive($input, $maxDepth = INF, $depth = 0, $arrayKeys = [])
	{
		if ($depth < $maxDepth) {
			$depth++;
			$keys = array_keys($input);
			foreach ($keys as $key) {
				if (is_array($input[$key]))
					$arrayKeys[$key] = self::array_keys_recursive($input[$key], $maxDepth, $depth);
				else
					$arrayKeys[] = $key;
			}
		}
		return $arrayKeys;
	}

}