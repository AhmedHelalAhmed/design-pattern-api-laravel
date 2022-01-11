<?php

namespace App\DesignPatterns\Creation\AbstractFactory\XML;

use App\DesignPatterns\Creation\AbstractFactory\RendererInterface;

class Renderer implements RendererInterface
{
    public function render(string $template): array
    {

        return [
            'template' => $template,
            'type' => 'application/xml'
        ];
    }
}
