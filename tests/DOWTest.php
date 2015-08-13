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

		function test_calculateDOW_invalidInput()
		{
				$test_DOW = new DOW;
				$input = "bob";

				//Act
				$result = $test_DOW->calculateDOW($input);

				//Assert
				$this->assertEquals("Invalid Date", $result);

		}

		function test_calculateDOW_invalidInput_0_day()
		{
				$test_DOW = new DOW;
				$input = "0/1/2011";

				//Act
				$result = $test_DOW->calculateDOW($input);

				//Assert
				$this->assertEquals("Invalid Date", $result);

		}

		function test_calculateDOW_invalidInput_0_month()
		{
				$test_DOW = new DOW;
				$input = "1/00/2011";

				//Act
				$result = $test_DOW->calculateDOW($input);

				//Assert
				$this->assertEquals("Invalid Date", $result);

		}

		function test_calculateDOW_invalidInput_0_year()
		{
				$test_DOW = new DOW;
				$input = "1/1/0000";

				//Act
				$result = $test_DOW->calculateDOW($input);

				//Assert
				$this->assertEquals("Invalid Date", $result);

		}

		function test_calculateDOW_pastDate()
		{
				$test_DOW = new DOW;
				$input = "1/01/0001";

				//Act
				$result = $test_DOW->calculateDOW($input);

				//Assert
				$this->assertEquals("Monday", $result);

		}

		function test_calculateDOW_futureDate()
		{
				$test_DOW = new DOW;
				$input = "01/01/3000";

				//Act
				$result = $test_DOW->calculateDOW($input);

				//Assert
				$this->assertEquals("Wednesday", $result);

		}




	}

?>
