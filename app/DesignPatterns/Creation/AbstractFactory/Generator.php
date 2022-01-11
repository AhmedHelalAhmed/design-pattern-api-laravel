<?php

namespace App\DesignPatterns\Creation\AbstractFactory;

use Illuminate\Database\Eloquent\Model;

class Generator
{
    public function execute(FactoryInterface $factory, Model $post): array
    {
        return $factory->getRenderer()->render($factory->getTemplate()->get($post));
    }
}
