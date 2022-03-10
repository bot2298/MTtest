<?php

namespace app\Helpers;

use Philo\Blade\Blade;

trait TemplateHelper
{

    public function view($template, $data = [])
    {
        $views = dirname($_SERVER["SCRIPT_FILENAME"]).'/resource/views';
        $cache = dirname($_SERVER["SCRIPT_FILENAME"]).'/resource/cache';

        $blade = new Blade($views, $cache);

        echo $blade->view()->make($template??'layout', $data)->render();

    }

}
