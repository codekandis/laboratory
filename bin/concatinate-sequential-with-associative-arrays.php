<?php declare( strict_types = 1 );
namespace CodeKandis\Laboratory;

use CodeKandis\Laboratory\Arrays\SequencialWithAssociativeArraysConcatinator;
use function dirname;
use function error_reporting;
use function ini_set;
use function var_dump;
use const E_ALL;

error_reporting( E_ALL );
ini_set( 'display_errors', 'On' );
ini_set( 'html_errors', 'Off' );

require_once dirname( __DIR__, 1 ) . '/vendor/autoload.php';

$concatinator = new SequencialWithAssociativeArraysConcatinator();

var_dump(
	$concatinator->concat(
		[
			0 => [
				'foo' => 'bar'
			],
			1 => [
				'man' => 'hunt'
			]
		],
		[
			'lo' => 'gic'
		],
		[
			'mark' => 'down'
		],
		[
			0 => [
				'base' => 'jump',
				'foo'  => 'bar'
			]
		],
		[
			0 => [
				'firle' => 'fanz'
			],
			2 => [
				'code' => 'kandis'
			]
		]
	)
);
