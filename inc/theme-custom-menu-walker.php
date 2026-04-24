<?php
/**
 * Custom Menu Walker for Baeren WordPress Theme.
 */
class Baeren_Walker_Nav_Menu extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$class  = $depth === 0 ? 'second-level' : 'third-level';
		$indent = str_repeat( "\t", $depth );
		$output .= "\n{$indent}<ul class=\"" . esc_attr( $class ) . "\">\n";
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( $depth === 0 ) {
			$item->classes[] = 'first-level';
		}
		parent::start_el( $output, $item, $depth, $args, $id );
	}
}
