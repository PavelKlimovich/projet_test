<?php

namespace Src\View;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View
{
    /**
     * Return Twig template.
     *
     * @param  string  $template
     * @return void
     */

    public static function view(string $template): Void
    {
        $loader = new FilesystemLoader('../resources/views');
        $twig  = new Environment($loader);

        //echo $twig->render($template);
    }
}
