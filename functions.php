<?php

/* Remove WordPress Backend Version Number */
function removeVersion() {
	remove_filter( 'update_footer', 'core_update_footer' );
}
add_action( 'admin_menu', 'removeVersion' );

?>