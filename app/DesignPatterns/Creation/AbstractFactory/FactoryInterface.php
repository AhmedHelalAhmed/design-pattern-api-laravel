<?php

namespace App\DesignPatterns\Creation\AbstractFactory;

interface FactoryInterface
{
    public function getTemplate(): TemplateInterface;

    public function getRenderer(): RendererInterface;
}
