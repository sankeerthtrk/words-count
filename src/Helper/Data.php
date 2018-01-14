<?php
/*
 * (c) Sankeerth Kanth S <sankeerthtrk@email.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace alshaya\WordCount\Helper;

class Data
{
    public function  __construct()
	{
        //construct
    }
	
	/**
	* @Description: Remove html and special characters.
	* @return string
	*/
	public function formatString($string)
	{
		$string = strtolower($string);		
		$string = strip_tags($string);			
		$string = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $string); // Removes special chars.
		return $string;
	}
}