<?php

namespace App\DesignPatterns\Creation\AbstractFactory;

use Illuminate\Database\Eloquent\Model;

interface TemplateInterface
{
    public function get(Model $post): string;
}
