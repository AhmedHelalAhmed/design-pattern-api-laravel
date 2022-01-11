<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Creation\AbstractFactory\Generator;
use App\DesignPatterns\Creation\AbstractFactory\HTML\Factory as HTMLFactory;
use App\DesignPatterns\Creation\AbstractFactory\JSON\Factory as JSONFactory;
use App\DesignPatterns\Creation\AbstractFactory\XML\Factory as XMLFactory;
use App\Models\Post;
use Throwable;

/**
 * We have two or more types that common on one or more action
 * Let's say we have (post) consists of (title) and (body)
 * We need to implement 2 ways to represent the post in api one is [HTML] the other is [XML]
 * And in the future we can add [JSON] for example
 *
 * Representation layer []
 * post => template for XML (type1)
 * post => template for HTML (type2)
 *
 * Behavior
 * Render the template for XML (type1)
 * Render the template for HTML (type2)
 *
 *
 * Class AbstractFactoryController
 * @package App\Http\Controllers
 * @author Ahmed Helal Ahmed
 */
class AbstractFactoryController extends Controller
{

    const TYPES = [
        'html' => HTMLFactory::class,
        'xml' => XMLFactory::class,
        'json' => JSONFactory::class,
    ];

    /**
     * Handle the incoming request.
     *
     * @return void
     * @throws Throwable
     */
    public function __invoke(Generator $generator)
    {
        throw_if(!in_array(request('type'), array_keys(self::TYPES)), 'Renderer is not supported');


        $class = self::TYPES[request('type')];

        $post = new Post([
            'title' => 'test title',
            'body' => 'test body'
        ]);

        return response()->json($generator->execute(resolve($class), $post));
    }
}
