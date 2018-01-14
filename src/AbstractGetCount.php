<?php
/*
 * (c) Sankeerth Kanth S <sankeerthtrk@email.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace alshaya\WordCount;

use alshaya\WordCount\Helper\Data;

class AbstractGetCount
{
	protected $text;
	
	public function  __construct()
	{
        //construct	
    } 

	/**
	* @Description: Set the given text.
	* @return bool
	* @param string $text
	*/	
	public function setText($text)
	{
		$this->text = $text;
		return;
	}
	
	/**
	* @Description: Returns the text given.
	* @return string
	*/
	public function getText()
	{
		return Data::formatString($this->text);
	}
	
	/**
	* @Description: Converts Array to Json.
	* @return string
	* @param array $arr
	*/
	public function convertArrayToJson($arr)
	{
		return json_encode($arr);
	}
}