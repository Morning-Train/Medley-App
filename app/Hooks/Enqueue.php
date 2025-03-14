<?php

namespace MedleyApp\Hooks;

use MorningMedley\Hook\Traits\Hookable;
use MorningMedley\Hook\Classes\Filter;
use MorningMedley\Hook\Classes\Action;
use MorningMedley\Application\WpContext\WpContextContract;

class Enqueue
{
    use Hookable;

    public function __construct(private WpContextContract $wpContext)
    {
    }

    #[Action('wp_enqueue_scripts')]
    public function enqueueStyles(): void
    {
        \wp_enqueue_style(
            'main-style',
            asset('build/css/main.css'),
            [],
            $this->wpContext->version
        );

        $details = require dirname(__FILE__, 3) . "/public/build/js/main.asset.php";
        \wp_enqueue_script(
            'main-script',
            asset('build/js/main.js'),
            $details['dependencies'],
            $details['version']
        );
    }
}
