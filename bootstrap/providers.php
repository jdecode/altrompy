<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    class_exists(\Laravel\Telescope\TelescopeApplicationServiceProvider::class) && app()->environment('local') ? App\Providers\TelescopeServiceProvider::class : null,
];
