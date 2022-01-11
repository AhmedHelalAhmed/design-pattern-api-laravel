<?php

namespace App\DesignPatterns\Creation\AbstractFactory\JSON;

use App\DesignPatterns\Creation\AbstractFactory\TemplateInterface;
use Illuminate\Database\Eloquent\Model;

class Template implements TemplateInterface
{

    public function get(Model $post): string
    {
        return $post->toJson();
    }
}
