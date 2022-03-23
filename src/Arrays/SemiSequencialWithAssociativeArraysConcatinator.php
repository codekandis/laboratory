<?php declare( strict_types = 1 );
namespace CodeKandis\Laboratory\Arrays;

use function array_filter;
use function array_keys;
use function array_push;
use function count;

/**
 * Represents an array concatinator concatinating an unspecified amount of semi-sequencial arrays with associative arrays.
 * @package codekandis/laboratory
 * @author Christian Ramelow <info@codekandis.net>
 */
class SemiSequencialWithAssociativeArraysConcatinator implements ArrayConcatinatorInterface
{
	/**
	 * Determines if an array is a semi-sequential array.
	 * @param array $array The array to check.
	 * @return bool True if the array is a semi-sequential array, otherwise false.
	 */
	private function isSemiSequentialArray( array $array ): bool
	{
		return count(
				   array_filter(
					   array_keys( $array ), 'is_string'
				   )
			   ) === 0;
	}

	/**
	 * {@inheritDoc}
	 * Concats semi-sequential and associative arrays.
	 */
	public function concat( array ...$arrays ): array
	{
		$concatinatedArray = [];

		foreach ( $arrays as $array )
		{
			if ( true === $this->isSemiSequentialArray( $array ) )
			{
				array_push( $concatinatedArray, ...$array );

				continue;
			}

			$concatinatedArray[] = $array;
		}

		return $concatinatedArray;
	}
}
