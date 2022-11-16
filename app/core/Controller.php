<?php

namespace app\core;

use Twig\Extra\Markdown\MarkdownExtension;
use Twig\Extra\Markdown\DefaultMarkdown;
use Twig\Extra\Markdown\MarkdownRuntime;
use Twig\RuntimeLoader\RuntimeLoaderInterface;

class Controller {
    protected function load(string $view, $params = []) {
        $loader = new \Twig\Loader\FilesystemLoader('../app/view');
        $twig = new \Twig\Environment($loader);

        $twig->addGlobal('BASE', BASE);
        $twig->addGlobal("session", $_SESSION);
        $twig->addExtension(new \app\Twig\AppExtension);
    
        $twig->addRuntimeLoader(new class implements RuntimeLoaderInterface {
            public function load($class) {
                if (MarkdownRuntime::class === $class) {
                    return new MarkdownRuntime(new DefaultMarkdown());
                }
            }
        });

        $twig->addExtension(new MarkdownExtension());

        echo $twig->render($view . '.twig.php', $params);
    }

    public function showMessage(string $title, string $message, string $link = null, int $httpCode = 200)
    {
        http_response_code($httpCode);

        return $this->load('partials/message', [
            'title'    => $title ? $title : "[ERROR]: Algum Erro Intero ocorreu.",
            'message' => $message ? $message : "Sua internet pode estar lenta demais. Pressione a tecla F5 ou tente mais tarde",
            'link'      => $link ? $link : BASE . "/dashboard" 
        ]);
    }
}