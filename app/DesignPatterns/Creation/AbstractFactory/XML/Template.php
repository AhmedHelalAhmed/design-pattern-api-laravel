<?php

namespace App\DesignPatterns\Creation\AbstractFactory\XML;

use App\DesignPatterns\Creation\AbstractFactory\TemplateInterface;
use Illuminate\Database\Eloquent\Model;

class Template implements TemplateInterface
{

    public function get(Model $post): string
    {
        $template = '<?xml version="1.0" encoding="UTF-8"?>';
        $template .= '<root>';
        $template .= '<title>' . $post->title . '</title>';
        $template .= '<body>' . $post->body . '</body>';
        $template .= '</root>';

        return $template;
    }
}
