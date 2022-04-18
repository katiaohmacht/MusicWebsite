<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
shell_exec( ‘sudo -u katia /home/katia/git-pull-web.sh’ );
}

?>hi
