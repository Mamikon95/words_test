<?php
namespace utils;

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 01.11.2018
 * Time: 14:04
 */

class StringFormatter {

	private static $instance;

	public static function getInstance() {
		if(!self::$instance) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * @param $str
	 * @return String
	 */
	public static function sortWords($str): String {
		$strArr = explode(' ',$str);

		foreach($strArr as $key => $item) {
			$strArr[$key] = self::getInstance()->_sortWord($item);

			if($strArr[$key] === '') {
				$strArr[$key] = ' ';
			}
		}

		return implode(' ',$strArr);
	}

	/**
	 * @param $str
	 * @return String
	 */
	private function _sortWord($str): String {
		$strArr = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
		sort($strArr);
		return implode('',$strArr);
	}
}