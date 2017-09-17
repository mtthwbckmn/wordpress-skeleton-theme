<?php

/* Remove WordPress Backend Version Number */
function removeVersion() {
	remove_filter( 'update_footer', 'removeVersion' ); 
}

?>