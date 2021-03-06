<?php

class ClDoubleTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::__construct_default
	 */
	function test_default_constructor() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble();
		$this->assertInternalType('double', $instance->value);
		$this->assertEquals(0.0, $instance->value);

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::__construct_double
	 */
	function test_double_constructor() {
		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble(5.5);
		$this->assertInternalType('double', $instance->value);
		$this->assertEquals(5.5, $instance->value);
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::doubleValue
	 */
	function test_double_value() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble(5.5);
		$this->assertInternalType('double', $instance->doubleValue());
		$this->assertEquals(5.5, $instance->doubleValue());

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::floatValue
	 */
	function test_float_value() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble(5.5);
		$this->assertInternalType('double', $instance->floatValue());
		$this->assertEquals(5.5, $instance->floatValue());

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::intValue
	 */
	function test_int_value() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble(5.5);
		$this->assertInternalType('integer', $instance->intValue());
		$this->assertEquals(5, $instance->intValue());

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::longValue
	 */
	function test_long_value() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble(5.5);
		$this->assertInternalType('integer', $instance->longValue());
		$this->assertEquals(5, $instance->longValue());

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::shortValue
	 */
	function test_short_value() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble(5.5);
		$this->assertInternalType('integer', $instance->shortValue());
		$this->assertEquals(5, $instance->shortValue());

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::__clone
	 */
	function test_clone() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble( 5.5 );
		$this->assertInstanceOf( '\DaveRoss\CassowaryConstraintSolver\ClDouble', clone( $instance ) );
		$this->assertNotSame( $instance, clone( $instance ) );
		$this->assertEquals( $instance, clone( $instance ) );

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::setValue
	 */
	function test_setval() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble( 5.5 );
		$instance->setValue(6.0);
		$this->assertEquals(6.0, $instance->doubleValue());

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::__toString
	 */
	function test_toString() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble( 5.5 );
		$this->assertInternalType( 'string', $instance->__toString() );
		$this->assertEquals( '5.5', $instance->__toString() );

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClDouble::equals
	 */
	function test_equals() {

		$instance = new \DaveRoss\CassowaryConstraintSolver\ClDouble( 5.5 );
		$this->assertInternalType( 'boolean', $instance->equals( new \DaveRoss\CassowaryConstraintSolver\ClDouble( 5.5 ) ) );
		$this->assertEquals( true, $instance->equals( new \DaveRoss\CassowaryConstraintSolver\ClDouble( 5.5 ) ) );

	}

}
