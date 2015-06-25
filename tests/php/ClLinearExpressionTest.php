<?php

class ClLinearExpressionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::__construct_clabstractvariable_double_double
	 */
	public function test_construct_clabstractvariable_double_double() {
		$example = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable(),
			1.0,
			2.0
		);
		$this->assertInternalType( 'double', $example->constant() );
		$this->assertEquals( 2.0, $example->constant() );
		foreach ( $example->terms() as $index => $key ) {
			// Should only be one item in this array
			$this->assertEquals( 0, $index );
			$this->assertInternalType( 'double', $example->terms()[ $key ]->doubleValue() );
			$this->assertEquals( 1.0, $example->terms()[ $key ]->doubleValue() );
		}
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::__construct_double
	 */
	public function test_construct_double() {
		$example = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression( 1.0 );
		$this->assertInternalType( 'double', $example->constant() );
		$this->assertEquals( 1.0, $example->constant() );
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::__construct_default
	 */
	public function test_construct_default() {
		$example = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression();
		$this->assertInternalType( 'double', $example->constant() );
		$this->assertEquals( 0.0, $example->constant() );
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::__construct_clabstractvariable_double
	 */
	public function test_construct_clabstractvariable_double() {
		$example = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable(),
			1.0
		);
		$this->assertInternalType( 'double', $example->constant() );
		$this->assertEquals( 0.0, $example->constant() );
		foreach ( $example->terms() as $index => $key ) {
			// Should only be one item in this array
			$this->assertEquals( 0, $index );
			$this->assertInternalType( 'double', $example->terms()[ $key ]->doubleValue() );
			$this->assertEquals( 1.0, $example->terms()[ $key ]->doubleValue() );
		}
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::__construct_clabstractvariable
	 */
	public function __construct_clabstractvariable() {
		$example = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable()
		);
		$this->assertInternalType( 'double', $example->constant() );
		$this->assertEquals( 0.0, $example->constant() );
		foreach ( $example->terms() as $index => $key ) {
			// Should only be one item in this array
			$this->assertEquals( 0, $index );
			$this->assertInternalType( 'double', $example->terms()[ $key ]->doubleValue() );
			$this->assertEquals( 0.0, $example->terms()[ $key ]->doubleValue() );
		}
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::multiplyMe
	 */
	public function test_multiplyMe() {
		$example = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable(),
			1.0,
			2.0
		);
		$this->assertInstanceOf( '\DaveRoss\CassowaryConstraintSolver\ClLinearExpression', $example->multiplyMe( 2.0 ) );
		foreach ( $example->terms() as $index => $key ) {
			// Should only be one item in this array
			$this->assertEquals( 0, $index );
			$this->assertInternalType( 'double', $example->terms()[ $key ]->doubleValue() );
			// 2.0 = value * 2.0
			$this->assertEquals( 2.0, $example->terms()[ $key ]->doubleValue() );
		}
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::__clone
	 */
	public function test_clone() {
		$key     = new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable();
		$example = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			$key,
			1.0,
			2.0
		);
		$clone   = clone( $example );
		$this->assertInstanceOf( '\DaveRoss\CassowaryConstraintSolver\ClLinearExpression', $clone );
		$this->assertEquals( 1, count( $example->terms()->size() ) );
		$this->assertInternalType( 'double', $example->terms()[ $key ]->doubleValue() );
		$this->assertEquals( 1.0, $example->terms()[ $key ]->doubleValue() );
	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::times_double
	 */
	public function test_times_double() {
//		$key                = new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable();
//		$example            = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
//			$key,
//			1.0,
//			2.0
//		);
//		$multiplied_example = $example->times( 2.0 );
//		$this->assertInstanceOf( '\DaveRoss\CassowaryConstraintSolver\ClLinearExpression', $multiplied_example );
//		$this->assertSame( $example, $multiplied_example );
//		$this->assertEquals( 1, count( $example->terms()->size() ) );
//		$this->assertInternalType( 'double', $example->terms()[ $key ]->doubleValue() );
//		$this->assertEquals( 2.0, $example->terms()[ $key ]->doubleValue() );
	}

	public function test_times_cllinearexpression() {
//
//		// $this is constant
//		$example_constant            = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(5.0);
//		$result1 = $example_constant->times(
//			new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
//				new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable(),
//				1.0,
//				2.0
//			)
//		);
//
//		// neither is constant
//		// $expr is constant

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::isConstant
	 */
	public function test_isConstant() {

		$example_constant            = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(5.0);
		$this->assertInternalType('boolean', $example_constant->isConstant());
		$this->assertEquals(true, $example_constant->isConstant());

		$example_not_constant            = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable(),
			1.0,
			2.0
		);
		$this->assertInternalType('boolean', $example_not_constant->isConstant());
		$this->assertEquals(false, $example_not_constant->isConstant());

	}

	/**
	 * @covers \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::FEquals
	 */
	public function test_FEquals() {

		$key      = new \DaveRoss\CassowaryConstraintSolver\ClDummyVariable();
		$example1 = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			$key,
			1.0,
			2.0
		);

		$this->assertInternalType( 'boolean', \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::FEquals(
			$example1,
			$example1
		) );

		$this->assertEquals( true, \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::FEquals(
			$example1,
			$example1
		) );

		$example2 = new \DaveRoss\CassowaryConstraintSolver\ClLinearExpression(
			$key,
			1.0,
			2.0
		);

		// Same values, but different $_terms objects

		$this->assertInternalType( 'boolean', \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::FEquals(
			$example1,
			$example2
		) );

		$this->assertEquals( false, \DaveRoss\CassowaryConstraintSolver\ClLinearExpression::FEquals(
			$example1,
			$example2
		) );

	}
}
