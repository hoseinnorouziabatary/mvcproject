<?php namespace Core;

class View
{
    /**
     * @throws \Exception
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../App/Views/{$view}.php";

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("{$file} not found");
        }

    }

}
