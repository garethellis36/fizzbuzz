<?php
namespace Gumbercules\Fizzbuzz\Test;

use Gumbercules\Fizzbuzz\FizzBuzz;

/*
 * @property FizzBuzz $fizzBuzz
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		parent::setUp();

		$this->fizzBuzz = new Fizzbuzz();
	}

	public function testGetsCorrectItemInSequence()
	{
		$this->assertEquals(29, $this->fizzBuzz->getSequenceItem(29));
		$this->assertEquals("Fizz", $this->fizzBuzz->getSequenceItem(18));
		$this->assertEquals("Buzz", $this->fizzBuzz->getSequenceItem(20));
		$this->assertEquals("FizzBuzz", $this->fizzBuzz->getSequenceItem(30));
	}

	public function testExceptionThrownIfNonIntIsPassedToGetSequenceItem()
	{
		$this->setExpectedException(\InvalidArgumentException::class);
		$this->fizzBuzz->getSequenceItem("1");
	}

	public function testGetsCorrectSeqeunce()
	{
		$expected = [
			1,
			2,
			"Fizz",
			4,
			"Buzz",
			"Fizz",
			7,
			8,
			"Fizz",
			"Buzz",
			11,
			"Fizz",
			13,
			14,
			"FizzBuzz"
		];
		$this->assertEquals($expected, $this->fizzBuzz->getSequence(15));
	}
}