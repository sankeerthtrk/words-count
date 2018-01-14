<?php
/*
 * (c) Sankeerth Kanth S <sankeerthtrk@email.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace alshaya\WordCount;

use alshaya\WordCount\Helper\Data;
use alshaya\WordCount\customException;

class GetCount extends \alshaya\WordCount\AbstractGetCount
{	
	/**
     * @var array
     */
	protected $wordsCount = array();
	
	/**
     * @var array
     */
	protected $wordsRanking = array();
	
	public function  __construct()
	{
		parent::__construct();      	
    }
	
	/**
	* @Description: Format the Ranking array to string
	* @return string
	*/
	public function getWordRankingJson()
	{
		$this->getWordRanking();
		return $this->convertArrayToJson($this->wordsRanking);
	}
	
	/**
	* @Description: Split the sentence into each word and assign rank 
	* @return array()|string
	* @param string $format
	*/	
	public function getWordRanking($format = null)
	{
		try{
			$this->wordsCount = $this->_getWordsCount();			
			usort($this->wordsCount, function($a, $b) {return(static::compareByCount($a, $b));});
			$this->wordsRanking = $this->_assignRank();
			if (strtolower($format) == "array") {
				return $this->wordsRanking;
			} elseif(strtolower($format) == "json") {
				return $this->convertArrayToJson($this->wordsRanking);
			} else {
				throw new customException("Return format is not valid");
			}
		}catch(customException $e){			
			return $e->errorMessage();
		}		
	}
	
	/**
	* @Description: Finds the matching words and gets count.
	* @return array()
	*/
    protected function _getWordsCount()
	{		
		$wordsArray = array();
		if ($this->getText()) {
			foreach (explode(" ",$this->getText()) as $word) {
				if (!in_array($word, array_column($wordsArray, 'word')) && $word != "") {
					$wordsArray[] = array("word"=>$word, "count"=>preg_match_all('/\b'.$word.'\b/i',$this->getText()));
				}		
			}
		} else {			
			throw new customException("Text is empty");
		}
		return $wordsArray;
	}
	
	/**
	* @Description: assign the rank  for each word based on the count.
	* @return array()
	*/	
	protected function _assignRank(){
		$rank = 0;
		$previousCout = 0;
		if (count($this->wordsCount) > 0) {
			foreach ($this->wordsCount as $word) {
				if ($previousCout == $word["count"]) {
					$rankArray[] = array("word"=>$word["word"], "count"=>$word["count"], "rank"=>$rank);
				} else {
					$rank += 1;
					$previousCout = $word["count"];
					$rankArray[] = array("word"=>$word["word"], "count"=>$word["count"], "rank"=>$rank);		
				}			
			}	
		} else {
			throw new customException("Words not found.");
		}	
		
		return $rankArray;
	}
	
	/**
	* @Description: compare the count of each word.
	* @return string
	*/
	function compareByCount($a, $b) 
	{
		if ($a['count']==$b['count']) {
			return 0;
		}
		return $a['count'] < $b['count']?1:-1;
	}
	
}