<?php

/**
 * Get translated object ID if the WPML plugin is installed
 * Return the original ID if this plugin is not installed
 *
 * @param int    $id            The object ID
 * @param string $type          The object type 'post', 'page', 'post_tag', 'category' or 'attachment'. Default is 'page'
 * @param bool   $original      Set as 'true' if you want WPML to return the ID of the original language element if the translation is missing.
 * @param bool   $language_code If set, forces the language of the returned object and can be different than the displayed language.
 *
 * @return mixed
 */
function sober_addons_get_translated_object_id( $id, $type = 'page', $original = true, $language_code = null ) {
	if ( function_exists( 'wpml_object_id_filter' ) ) {
		$id = wpml_object_id_filter( $id, $type, $original, $language_code );
	} elseif ( function_exists( 'icl_object_id' ) ) {
		$id = icl_object_id( $id, $type, $original, $language_code );
	}

	return apply_filters( 'wpml_object_id', $id, $type, $original, $language_code );
}