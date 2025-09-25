<?php

namespace MedleyApp\Hooks;

use MorningMedley\Hook\Traits\Hookable;
use MorningMedley\Hook\Classes\Filter;
use MorningMedley\Hook\Classes\Action;

class Enqueue
{
    use Hookable;

    #[Action('wp_enqueue_scripts')]
    public function enqueue(): void
    {
        \enqueue_style( 'main-style', 'build/css/main.css');
        \wp_enqueue_script('main-script', 'build/js/main.js');
    }
}
