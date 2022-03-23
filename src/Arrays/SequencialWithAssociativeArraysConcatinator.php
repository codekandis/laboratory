<?php declare( strict_types = 1 );
namespace CodeKandis\Laboratory\Arrays;

use function array_keys;
use function array_push;
use function count;
use function range;

/**
 * Represents an array concatinator concatinating an unspecified amount of sequencial arrays with associative arrays.
 * @package codekandis/laboratory
 * @author Christian Ramelow <info@codekandis.net>
 */
class SequencialWithAssociativeArraysConcatinator implements ArrayConcatinatorInterface
{
	/**
	 * Determines if an array is a sequential array.
	 * @param array $array The array to check.
	 * @return bool True if the array is a sequential array, otherwise false.
	 */
	private function isSequentialArray( array $array ): bool
	{
		/**
		 * Since PHP 8.1 you can use ...
		 *
		 * return array_is_list( $array )
		 */
		return [] === $array || array_keys( $array ) === range( 0, count( $array ) - 1 );
	}

	/**
	 * {@inheritDoc}
	 * Concats sequential and associative arrays.
	 */
	public function concat( array ...$arrays ): array
	{
		$concatinatedArray = [];

		foreach ( $arrays as $array )
		{
			if ( true === $this->isSequentialArray( $array ) )
			{
				array_push( $concatinatedArray, ...$array );

				continue;
			}

			$concatinatedArray[] = $array;
		}

		return $concatinatedArray;
	}
}
