<?php
/*
 * (c) Sankeerth Kanth S <sankeerthtrk@email.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace alshaya\WordCount;

use Exception;

class customException extends \Exception
{	
	/**
	* @Description: Formats the error message.
	* @return string	
	*/
	public function errorMessage() {		
		$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
		.' </br><b> Message: '.$this->getMessage().'</b>';
		return $errorMsg;
	}
}