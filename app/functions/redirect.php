<?php

/**
 * 
 * Redirecionando um usuário para a URL informada e finaliza a operação
 * 
 * @param mixed $url
 * @return void
 * 
 */
function redirect(string $url) {
    header('Location: ' . $url);

    exit;
}