# Platon wordpress starter theme

Platon is yet another framework that goes on top of Wordpress, heavily inspired by Laravel
Platon makes Wordpress object oriented, with some smart automagic added to it.

### Installation

- ```composer create-project iamfredric/platon-theme```
- Replace all occurances of [THEME_TITLE] with the title of your theme. (style.css + config/app.php)
- Replace all occurances of [THEME_SLUG] with the slug of your theme. (style.css + config/app.php)

#### Routing
Normally, WordPress decides what template to render by looking at your file names.

In platon, this works. However, it's not the idea. Instead, there are a routes/web.php-file where we define routes.

The routes correspond with the wordpress template naming scheme.

```php
<?php

use Platon\Facades\Route;

Route::register('front-page', [PageController::class, 'home']);
Route::register('page', [PageController::class, 'show']);

Route::register('index', [PostController::class, 'index']);
Route::register('single', [PostController::class, 'show']);

Route::register('single-project', [PostController::class, 'index']);
```

#### Controllers
Controllers are just a place to process the data before it hits the view-layer.

```php
<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController 
{
    public function show(Page $page): View
    {
        return view('pages.show', compact('page'));
    }
}
```

The page is resolved from the Container.
This basically translates to:
```php 
$page = Page::current();
``` 

#### Models
The models are really just a wrapper for the WP_Post object.

It comes with some nice features.

For example, this is a post, the model name decides what the post type is.

```php
class Post extends Model 
{}
```

```blade
<h1>{{ $post->title }}</h1>
<time datetime="{{ $post->created }}">
    Created at: {{ $post->created->format('j F Y') }}
</time>    

<div>
    {!! $post->content !!}
</div>   
```
