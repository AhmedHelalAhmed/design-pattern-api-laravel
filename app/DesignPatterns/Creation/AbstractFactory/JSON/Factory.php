<?php

namespace App\DesignPatterns\Creation\AbstractFactory\JSON;

use App\DesignPatterns\Creation\AbstractFactory\FactoryInterface;
use App\DesignPatterns\Creation\AbstractFactory\TemplateInterface;

class Factory implements FactoryInterface
{
    public function getTemplate(): TemplateInterface
    {
        return new Template;
    }

    public function getRenderer(): Renderer
    {
        return new Renderer;
    }
}
