<?php

/**
 * Configuration Contract
 *
 * @package     Fulcrum\Config
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum\Config;

interface Config_Contract {

	/**
	 * Retrieves all of the runtime configuration parameters
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public function all();

	/**
	 * Get the specified configuration value.
	 *
	 * @param  string  $parameter_key
	 * @param  mixed   $default
	 * @return mixed
	 */
	public function get( $parameter_key, $default = null );

	/**
	 * Determine if the given configuration value exists.
	 *
	 * @param  string  $parameter_key
	 * @return bool
	 */
	public function has( $parameter_key );

	/**
	 * Push a configuration in via the key
	 *
	 * @since 1.0.0
	 *
	 * @param string $parameter_key Key to be assigned, which also becomes the property
	 * @param mixed $value Value to be assigned to the parameter key
	 * @return null
	 */
	public function push( $parameter_key, $value );
}
