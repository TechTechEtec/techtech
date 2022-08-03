<?php

    require "../vendor/erusev/parsedown/Parsedown.php";
 


     // To import this function use:  require "<root_path>/src/services/cURL.php"

    function fetch_markdown(string $URL) {

        $Parsedown = new Parsedown(); // markdown compiler

        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_URL, $URL);
        curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
    
        $response = curl_exec($curlSession);
    
        $content_html = $Parsedown->text($response); // feching data
    
        curl_close($curlSession);

        return $content_html;
    }

   // example of markdown content 'https://raw.githubusercontent.com/VictorSilva15/report_screen_esther/main/README.md'
   


?>