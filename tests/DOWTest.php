<?php

	require_once "src/DOW.php";

	class DOWTest extends PHPUnit_Framework_TestCase
	{

		function test_calculateDOW_today()
		{
				$test_DOW = new DOW;
				$input = "08/13/2015";

				//Act
				$result = $test_DOW->calculateDOW($input);

				//Assert
				$this->assertEquals("Thursday", $result);

		}


	}

?>
