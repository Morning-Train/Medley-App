<?php return [
    'env' => \wp_get_environment_type(),
    'send_exceptions_to_ray' => \wp_get_environment_type() === 'local',
];
