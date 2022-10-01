<?php

namespace app\core;

// Classe Controller que será extendida para ser usada na routerController.
// Aqui está a configuração do Twig.

class Controller {
    protected function load(string $view, $params = []) {
        $loader = new \Twig\Loader\filesystemLoader('../app/view');
        $twig = new \Twig\Environment($loader);

        $twig->addGlobal('BASE', BASE);
        echo $twig->render($view . '.twig.php', $params);
    }

    public function showMessage(string $title, string $message, string $link = null, int $httpCode = 200)
    {
        http_response_code($httpCode);

        $this->load('partials/message', [
            'title'    => $title,
            'message' => $message,
            'link'      => $link
        ]);
    }
}