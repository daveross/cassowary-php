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

/**
 * Class ClInternalError
 * @package DaveRoss\CassowaryConstraintSolver
 * An internal Exception from Cassowary Constraint Solver
 */
class ClInternalError extends ClException {

	public function __construct( $s ) {
		parent::__construct( $s );
	}

}
