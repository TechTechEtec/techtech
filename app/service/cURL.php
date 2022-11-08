<?php

function fetch_markdown(string $URL) {

    $Parsedown = new  Parsedown(); // markdown compiler

    console_log($Parsedown);

    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $URL);
    curl_setopt($curlSession, CURLOPT_TRANSFER_ENCODING, true);
    curl_setopt($curlSession, CURLOPT_TRANSFERTEXT, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curlSession);

    $content_html = $Parsedown->text($response); // feching data

    curl_close($curlSession);

    return $content_html;
}

   