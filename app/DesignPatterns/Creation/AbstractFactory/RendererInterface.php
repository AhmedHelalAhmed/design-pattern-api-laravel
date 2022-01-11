<?php

namespace App\DesignPatterns\Creation\AbstractFactory;

interface RendererInterface
{
    public function render(string $template): array;
}
