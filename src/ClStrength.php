<?php

/*
 * Cassowary Incremental Constraint Solver
 * Original Smalltalk Implementation by Alan Borning
 *
 * Java Implementation by:
 * Greg J. Badros
 * Erwin Bolwidt
 *
 * (C) 1998, 1999 Greg J. Badros and Alan Borning
 * (C) Copyright 2012 Erwin Bolwidt
 *
 * See the file LICENSE for legal details regarding this software
 */

namespace DaveRoss\CassowaryConstraintSolver;

class ClStrength {

	use \DaveRoss\CassowaryConstraintSolver\OverloadedMethods;

	public static $required; /* ClStrength */

	public static $strong; /* ClStrength */

	public static $medium; /* ClStrength */

	public static $weak; /* ClStrength */

	private $_name; /* String */

	private $_symbolicWeight; /* ClSymbolicWeight */

	public function __construct_string_clsymbolicweight( $name, ClSymbolicWeight $symbolicWeight ) {
		$this->_name           = $name;
		$this->_symbolicWeight = $symbolicWeight;
	}

	public function __construct_string_double_double_double( $name, $w1, $w2, $w3 ) {
		$this->__construct_string_clsymbolicweight( $name, new ClSymbolicWeight( $w1, $w2, $w3 ) );
	}

	/**
	 * @return bool
	 */
	public function isRequired() {
		return ( $this == self::$required );
	}


	public function __toString() {
		return $this->getName() . ( ! $this->isRequired() ? ( ":" . $this->getSymbolicWeight() ) : "" );
	}

	/**
	 * @return ClSymbolicWeight
	 */
	public function getSymbolicWeight() {
		return $this->_symbolicWeight;
	}

	/**
	 * @return String
	 */
	public function getName() {
		return $this->_name;
	}

}

ClStrength::$required = new ClStrength( "<Required>", 1000.0, 1000.0, 1000.0 );
ClStrength::$strong   = new ClStrength( "strong", 1.0, 0.0, 0.0 );
ClStrength::$medium   = new ClStrength( "medium", 0.0, 1.0, 0.0 );
ClStrength::$weak     = new ClStrength( "weak", 0.0, 0.0, 1.0 );
