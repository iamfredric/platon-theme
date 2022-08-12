<?php

return [
    'routes' => theme_path('routes/web.php'),
    // 'api_routes' => theme_path('routes/api.php'),
    'views' => theme_path('resources/views'),
    'views_cache' => uploads_path('.cache/views'),
    // 'gutenberg' => theme_path('routes/gutenberg.php'),
    // 'blocks' => 'gutenberg/{name}',
    'cache' => uploads_path('.cache'),
    'components' => 'blocks/{name}',
    'assets' => 'dist',
    'images' => theme_path('routes/images.php'),
    'menus' => theme_path('routes/menus.php'),
    'posttypes' => theme_path('routes/posttypes.php'),
    'hooks' => theme_path('routes/hooks.php')
];
