<?php


function fetch_markdown(string $URL) {

    $Parsedown = new \parsedown\Parsedown(); // markdown compiler

    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $URL);
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curlSession);

    $content_html = $Parsedown->text($response); // feching data

    curl_close($curlSession);

    return $content_html;
}

   