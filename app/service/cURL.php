<?php

function fetch_markdown(string $URL) {

    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $URL);
    curl_setopt($curlSession, CURLOPT_TRANSFER_ENCODING, true);
    curl_setopt($curlSession, CURLOPT_TRANSFERTEXT, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curlSession); // feching data

    curl_close($curlSession);

    return $response;
}

   