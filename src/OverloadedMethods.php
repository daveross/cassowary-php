<?php

namespace DaveRoss\CasswaryConstraintSolver;

trait OverloadedMethods {

	function __construct() {

		if ( 0 === func_num_args() ) {
			call_user_func( array( __CLASS__, '__construct_default' ) );
		} else if ( method_exists( __CLASS__, self::_overridden_impl_fn_name( '__construct', func_get_args() ) ) ) {
			call_user_func_array( array(
				__CLASS__,
				self::_overridden_impl_fn_name( '__construct', func_get_args() )
			), func_get_args() );
		} else {
			throw new \RuntimeException( 'No applicable constructor for ' . self::_overridden_impl_fn_name( '__construct', func_get_args() ) . ' found in ' . __CLASS__ );
		}

	}

	/**
	 * @param string $name
	 * @param array  $args
	 *
	 * @todo iterate through argument class names with increasing genericness to allow passing a subclass to a method expecting its parent
	 */
	public function __call( $name, array $args ) {

		if ( method_exists( __CLASS__, self::_overridden_impl_fn_name( $name, $args ) ) ) {
			call_user_func_array( array(
				__CLASS__,
				self::_overridden_impl_fn_name( $name, $args )
			), func_get_args() );
		} else {
			throw new \RuntimeException( 'No applicable implementation for ' . self::_overridden_impl_fn_name( $name, $args ) . ' found in ' . __CLASS__ );
		}

	}

	public static function _overridden_impl_fn_name( $fn, $args ) {
		return $fn . '_' . implode( '_', array_map( 'strtolower', array_map( array(
			__CLASS__,
			'_overridden_impl_fn_part'
		), $args ) ) );
	}

	public static function _overridden_impl_fn_part( $arg ) {
		return strtolower( is_object( $arg ) ? get_class( $arg ) : gettype( $arg ) );
	}

}