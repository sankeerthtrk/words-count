This module splits the sentence into each words and assign rank based on the no of occurrence. 

Steps to use:
1. Install via composer "composer require alshaya/word-count"
2. create test file in the root folder.
	a. include the autoloader to load the class. //require_once __DIR__ . '/vendor/autoload.php';
	b. initialize the root class //$instance = new alshaya\WordCount\GetCount();
	c. Set the text to be checked //$instance->setText("fsfsf)
	d. Call the function which ranks the given text and arguments can be either arrya or json  //$instance->getWordRanking("array")