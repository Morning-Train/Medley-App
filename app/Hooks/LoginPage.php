<?php

namespace MedleyApp\Hooks;

use MorningMedley\Hook\Traits\Hookable;
use MorningMedley\Hook\Classes\Filter;
use MorningMedley\Hook\Classes\Action;
use MorningMedley\Application\WpContext\WpContextContract;

class LoginPage
{
    use Hookable;

    #[Filter('login_headerurl')]
    function customLoginLogoUrl()
    {
        return \home_url();
    }

    #[Filter('login_headertext')]
    function customLoginLogoUrlTitle()
    {
        return \get_bloginfo('name');
    }

    #[Action('login_enqueue_scripts')]
    public function customLoginLogo()
    {
        ?>
        <style>
            #login h1 a {
                background-image: url(<?php echo asset('images/icons/logo.svg') ?>);
                height: 180px;
                width: 180px;
                background-size: 180px;
                background-repeat: no-repeat;
                padding-bottom: 20px;
            }
        </style>
        <?php
    }
}
