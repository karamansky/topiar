<?php namespace TOP\Archive;

if( !defined( 'ABSPATH' ) ) exit;

class ArchiveDisplay {

	public function __construct() {
		$this->applyActions();
	}

	/**
	 * Add actions and filters
	 */
	public function applyActions() {
		add_filter( 'get_the_archive_title', [ $this, 'archiveTitle' ]);
	}


	public function archiveTitle( $title ){
		return preg_replace('~^[^:]+: ~', '', $title );
	}


}

new ArchiveDisplay();

class_alias( 'TOP\Archive\ArchiveDisplay', 'ArchiveDisplay' );





