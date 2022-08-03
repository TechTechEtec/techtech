<?php

    // To import this function use:  require "<root_path>/src/utils/console_log.php";

    // Replace <root_path> with the path to reach the root directory

    function console_log( $data ){ // function to execute a console.log
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

?>
