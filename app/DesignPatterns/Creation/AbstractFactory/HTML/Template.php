<?php

namespace App\DesignPatterns\Creation\AbstractFactory\HTML;

use App\DesignPatterns\Creation\AbstractFactory\TemplateInterface;
use Illuminate\Database\Eloquent\Model;

class Template implements TemplateInterface
{
    public function get(Model $post): string
    {
        $htmlTemplate = '<html> <body> <div>';
        $htmlTemplate .= '<h1>' . $post->title . '</h1>';
        $htmlTemplate .= '<p>' . $post->body . '</p>';
        $htmlTemplate .= '</div> </body> </html>';
        return $htmlTemplate;
    }
}
