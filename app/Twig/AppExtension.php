<?php 

namespace app\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('getMarkdown', [$this, 'getMarkdown']),
            new TwigFunction('getURL', [$this, 'getURL'])
        ];
    }

    public function getMarkdown($url) {
        return fetch_markdown($url);
    }

    public function getURL(){
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        console_log($actual_link);

        return $actual_link;
    }
}