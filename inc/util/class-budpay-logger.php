<?php
/**
 * Provides logging capabilities for debugging purposes.
 *
 * @class          Budpay_Logger
 * @version        2.0.0
 * @package    Budpay/WooCommerce
 * @subpackage Budpay/WooCommerce/util
 */

declare(strict_types=1);

defined( 'ABSPATH' ) || exit;

/**
 * Main Logger Class for Budpay WooCommerce Integration.
 *
 * @since 1.0.0
 */
final class Budpay_Logger {
	/**
	 * Source name for logger instance.
	 *
	 * @var string
	 */
	private array $source_name = array( 'source' => 'budpay' );
	/**
	 * Logger instance.
	 *
	 * @var Budpay_Logger|null
	 */
	private static ?Budpay_Logger $instance = null;

	/**
	 * Logger instance.
	 *
	 * @var WC_Logger|null
	 */
	private ?WC_Logger $logger = null;

	/**
	 * Logger Filename.
	 *
	 * @var string
	 */
	public string $file_name;

	/**
	 * Logger Constructor.
	 */
	private function ___construct() {}

	/**
	 * Get Logger Instance.
	 */
	public static function instance() {

		if ( null === self::$instance ) {
			self::$instance = new Budpay_Logger();
		}
		return self::$instance;
	}

	/**
	 * Log information
	 *
	 * @param string $message  constant name.
	 */
	public function info( string $message ) {
		wc_get_logger()->info( $message, $this->source_name );
	}

	/**
	 * Error information
	 *
	 * @param string $message  constant name.
	 */
	public function error( string $message ) {
		wc_get_logger()->error( $message, $this->source_name );
	}

	/**
	 * Alert information
	 *
	 * @param string $message  constant name.
	 */
	public function alert( string $message ) {
		wc_get_logger()->alert( $message, $this->source_name );
	}

	/**
	 * Debug information
	 *
	 * @param string $message  constant name.
	 */
	public function debug( string $message ) {
		wc_get_logger()->debug( $message, $this->source_name );
	}
}
