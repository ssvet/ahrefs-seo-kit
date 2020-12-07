<?php

spl_autoload_register( // @phpstan-ignore-next-line -- can not use return type at php5.
	function( $class ) {
		$prefix = 'ahrefs\\AhrefsSeoKit\\Google_Service_';
		$len    = strlen( $prefix );
		if ( 0 !== strncmp( $prefix, $class, $len ) ) {
			$prefix = 'Google_Service_';
			$len    = strlen( $prefix );
			if ( 0 !== strncmp( $prefix, $class, $len ) ) {
				return;
			}
		}
		$relative_path = str_replace( '_', '/', substr( $class, $len ) );
		$file           = __DIR__ . '/apiclient-services/src/Google/Service/' . $relative_path . '.php';
		if ( file_exists( $file ) ) {
			require_once $file;
		}
	}
);
