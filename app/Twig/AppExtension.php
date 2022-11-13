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
        ];
    }

    public function getMarkdown($url) {
        return fetch_markdown($url);
    }
}