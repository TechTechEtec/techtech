<?php

    // para importar use:  require "<root_path>/src/utils/console_log.php";

    function console_log( $data ){ // function que executa o console.log
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

?>
