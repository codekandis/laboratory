<?php declare( strict_types = 1 );
namespace CodeKandis\Laboratory\Arrays;

/**
 * Represents the interface of any array conatinator.
 * @package codekandis/laboratory
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArrayConcatinatorInterface
{
	/**
	 * Concats several arrays into one array.
	 * @param array ...$arrays The arrays to concat.
	 * @return array The concatinated array.
	 */
	public function concat( array ...$arrays ): array;
}
